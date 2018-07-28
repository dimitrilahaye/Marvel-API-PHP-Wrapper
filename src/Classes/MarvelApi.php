<?php

namespace DimitriLahaye;

use DimitriLahaye\Component\ApiComponent;
use DimitriLahaye\Filter\Filter;
use DimitriLahaye\Filter\FilterFactory;

class MarvelApi
{

	/**
	 * Your Marvel API public key
	 * @var string
	 */
	private $_public;
	/**
	 * Your Marvel API private key
	 * @var string
	 */
	private $_private;
	/**
	 * Transmission protocole to communicate with Marvel API
	 * @var string
	 */
	private $_protocol;
	/**
	 * Host to communicate with Marvel API
	 * @var string
	 */
	private $_host;
	/**
	 * Port to communicate with Marvel API
	 * @var string
	 */
	private $_port;
	/**
	 * Version of the Marvel API we want to call
	 * @var string
	 */
	private $_version;
	/**
	 * String added during fluent class utilisation.
	 * It corresponds with the namespace of the asked entity.
	 * Example : 'comics'
	 * @var string
	 */
	private $_category;
	/**
	 * String added during fluent class utilisation.
	 * It corresponds with the sub-namespace of the asked entity.
	 * Example : 'comics/1432/creators'
	 * @var string
	 */
	private $_subcategory;
	/**
	 * Asked entity's id added during fluent class utilisation.
	 * It corresponds with the id of the asked entity.
	 * Example : 'comics/1432'
	 * @var int
	 */
	private $_id;
	/**
	 * Built body for querying the Marvel API.
	 * Will content the timestamp, public key and hashed key.
	 * Could content queries from filtering. Example : '?limit=10&name=Spider-Man&offset=15'
	 * @var int
	 */	
	private $_body = array();

	/**
	 * Constructor.
	 * The configuration array must have "public" and "private" keys which corresponds to the public and private API key.
	 * Optionnaly, it can have "protocol", "host", "port" and "version" keys to build a specific URL to request the Marvel API.
	 * @param array $config
	 */
	public function __construct($config)
	{
		if ((!array_key_exists("public", $config))) {
			throw new \Exception("Public key missing!");
		}
		if ((!array_key_exists("private", $config))) {
			throw new \Exception("Private key missing!");
		}
		$this->_public = $config["public"];
		$this->_private = $config["private"];
		$this->_protocol = (array_key_exists("protocol", $config)) ? $config["protocol"] : "https";
		$this->_host = (array_key_exists("host", $config)) ? $config["host"] : "gateway.marvel.com";
		$this->_port = (array_key_exists("port", $config)) ? $config["port"] : 443;
		$this->_version = (array_key_exists("version", $config)) ? $config["version"] : "v1";
	}

	// public class API

	/**
	 * Get the complete list of comics from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return MarvelApi
	 */
	public function getComics(int $id = null)
	{
		$this->_category = "comics";
		$this->_id = $id;
		return $this;
	}

	/**
	 * Get the complete list of characters from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return MarvelApi
	 */
	public function getCharacters(int $id = null)
	{
		$this->_category = "characters";
		$this->_id = $id;
		return $this;
	}

	/**
	 * Get the complete list of creators from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return MarvelApi
	 */
	public function getCreators(int $id = null)
	{
		$this->_category = "creators";
		$this->_id = $id;
		return $this;
	}

	/**
	 * Get the complete list of events from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return MarvelApi
	 */
	public function getEvents(int $id = null)
	{
		$this->_category = "events";
		$this->_id = $id;
		return $this;
	}

	/**
	 * Get the complete list of series from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return MarvelApi
	 */
	public function getSeries(int $id = null)
	{
		$this->_category = "series";
		$this->_id = $id;
		return $this;
	}

	/**
	 * Get the complete list of stories from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return MarvelApi
	 */
	public function getStories(int $id = null)
	{
		$this->_category = "stories";
		$this->_id = $id;
		return $this;
	}

	/**
	 * Get all the comics associated to a previous item called by its id.
	 * @return MarvelApi
	 */
	public function comics()
	{
		$this->_subcategory = "comics";
		return $this;
	}

	/**
	 * Get all the creators associated to a previous item called by its id.
	 * @return MarvelApi
	 */
	public function creators()
	{
		$this->_subcategory = "creators";
		return $this;
	}

	/**
	 * Get all the events associated to a previous item called by its id.
	 * @return MarvelApi
	 */
	public function events()
	{
		$this->_subcategory = "events";
		return $this;
	}

	/**
	 * Get all the stories associated to a previous item called by its id.
	 * @return MarvelApi
	 */
	public function stories()
	{
		$this->_subcategory = "stories";
		return $this;
	}

	/**
	 * Get all the characters associated to a previous item called by its id.
	 * @return MarvelApi
	 */
	public function characters()
	{
		$this->_subcategory = "characters";
		return $this;
	}

	/**
	 * Get all the series associated to a previous item called by its id.
	 * @return MarvelApi
	 */
	public function series()
	{
		$this->_subcategory = "series";
		return $this;
	}

	/**
	 * Return an instance of Filter child class depending on the $_category or $_subcatgory.
	 * @return MarvelApi
	 */
	public function filter()
	{
		if (is_null($this->_subcategory)) {
			return FilterFactory::get($this->_category);
		}
		return FilterFactory::get($this->_subcategory);
	}

	/*
	 * Return a response from the Marvel API.
	 * This method will build the url to call with the category, id, subcategory and filters setted earlier.
	 * @return ApiComponentResult
	 */
	public function snikt(Filter $filter = null)
	{
		return $this->_get($this->_buildUrl($filter));
	}

	// private class API

	/*
	 * Return a full url with queries body.
	 * @return string
	 */
	private function _buildUrl(Filter $filter = null)
	{
		$path = $this->_category;
		if (!is_null($this->_id)) {
			$path .= "/" . $this->_id;
		}
		if (!is_null($this->_subcategory)) {
			$path .= "/" . $this->_subcategory;
		}
		if (!is_null($filter)) {
			$this->_body = array_merge($filter->getBody(), $this->_getBody());
		} else {
			$this->_body = $this->_getBody();
		}
		return "{$this->_protocol}://{$this->_host}:{$this->_port}/{$this->_version}/public/{$path}";
	}

	/*
	 * Return the body of the request.
	 * Contains a timestamp and an encrypted string containing the private and public API keys.
	 * @return array
	 */
	private function _getBody()
	{
		$timestamp = time();
		$hash = md5("{$timestamp}{$this->_private}{$this->_public}");
		return array(
			"ts" => $timestamp,
			"apikey" => $this->_public,
			"hash" => $hash
		);
	}

	/*
	 * Return a response from the Marvel API.
	 * @return ApiComponentResult
	 */
	private function _get($url)
	{
		$this->_category = null;
		$this->_subcategory = null;
		$this->_id = null;
		return ApiComponent::get($url, $this->_body);
	}
}