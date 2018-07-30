<?php

namespace DimitriLahaye\Api;

use DimitriLahaye\Handler\ApiCallHandler;
use DimitriLahaye\Handler\ApiCallResult;
use DimitriLahaye\Filter\Filter;
use DimitriLahaye\Filter\CharactersFilter;
use DimitriLahaye\Filter\ComicsFilter;
use DimitriLahaye\Filter\CreatorsFilter;
use DimitriLahaye\Filter\EventsFilter;
use DimitriLahaye\Filter\SeriesFilter;
use DimitriLahaye\Filter\StoriesFilter;

class MarvelApi
{

    /**
     * @var ApiCallHandler
     */
    private $_apiHandler;
	/**
	 * String added during fluent class utilisation.
	 * It corresponds with the namespace of the asked entity.
	 * Example : 'comics'
	 * @var string
	 */
	protected $_category;
	/**
	 * String added during fluent class utilisation.
	 * It corresponds with the sub-namespace of the asked entity.
	 * Example : 'comics/1432/creators'
	 * @var string
	 */
	protected $_subcategory;
	/**
	 * Asked entity's id added during fluent class utilisation.
	 * It corresponds with the id of the asked entity.
	 * Example : 'comics/1432'
	 * @var int
	 */
	protected $_id;

    /**
     * Marvel API configuration array.
     * It must have "public" and "private" keys which corresponds to
     * the public and private API key.
     * Optionnaly, it can have "scheme", "host", "port" and "version" keys
     * to build a specific URL to request the Marvel API.
     * @var array
     */
    protected $_config;

	/**
	 * Constructor.
	 * The configuration array must have "public" and "private" keys which corresponds to
     * the public and private API key.
	 * Optionnaly, it can have "scheme", "host", "port" and "version" keys to build a
     * specific URL to request the Marvel API.
	 * @param array $config
	 * @throws \Exception if you don't pass your public and private keys into the $config array.
	 */
	public function __construct($config)
	{
		if ((!array_key_exists("public", $config))) {
			throw new \Exception("Public key missing!");
		}
		if ((!array_key_exists("private", $config))) {
			throw new \Exception("Private key missing!");
		}
        $this->_config = $config;
        $this->_apiHandler = new ApiCallHandler($config);
	}

	// public class API

	/**
	 * Get the complete list of comics from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return ComicsApi
	 */
	public function getComics(int $id = null)
	{
        $this->_category = "comics";
        $api = new ComicsApi($this->_config);
        $api->setCategory($this->_category);
        $api->setId($id);
        $api->setFilter(new ComicsFilter());
        return $api;
	}

	/**
	 * Get the complete list of characters from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return CharactersApi
	 */
	public function getCharacters(int $id = null)
	{
		$this->_category = "characters";
        $api = new CharactersApi($this->_config);
        $api->setCategory($this->_category);
        $api->setId($id);
        $api->setFilter(new CharactersFilter());
        return $api;
	}

	/**
	 * Get the complete list of creators from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return CreatorsApi
	 */
	public function getCreators(int $id = null)
	{
        $this->_category = "creators";
        $api = new CreatorsApi($this->_config);
        $api->setCategory($this->_category);
        $api->setId($id);
        $api->setFilter(new CreatorsFilter());
        return $api;
	}

	/**
	 * Get the complete list of events from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return EventsApi
	 */
	public function getEvents(int $id = null)
	{
        $this->_category = "events";
        $api = new EventsApi($this->_config);
        $api->setCategory($this->_category);
        $api->setId($id);
        $api->setFilter(new EventsFilter());
        return $api;
	}

	/**
	 * Get the complete list of series from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return SeriesApi
	 */
	public function getSeries(int $id = null)
	{
        $this->_category = "series";
        $api = new SeriesApi($this->_config);
        $api->setCategory($this->_category);
        $api->setId($id);
        $api->setFilter(new SeriesFilter());
        return $api;
	}

	/**
	 * Get the complete list of stories from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return StoriesApi
	 */
	public function getStories(int $id = null)
	{
        $this->_category = "stories";
        $api = new StoriesApi($this->_config);
        $api->setCategory($this->_category);
        $api->setId($id);
        $api->setFilter(new StoriesFilter());
        return $api;
	}

    /**
     * Return a response from the Marvel API.
     * This method will build the url to call with the category, id, subcategory and filters setted earlier.
     * @param Filter $filter
     * @throws \Exception If a filter is passed in argument but its class doesn't match with the current namespace ($this->_category or $this->_subcategory), it throws an Exception.
     * Example: if you want to call '/public/creators' and try to use a SeriesFilter, it will throw an Exception.
     * Exception can also be throw if you call this method before any getter.
     * @return ApiCallResult
     */
    public function snikt(Filter $filter = null)
    {
        $this->_apiHandler->setCategory($this->_category)
            ->setId($this->_id)
            ->setSubcategory($this->_subcategory);
        return $this->_apiHandler->snikt($filter);
    }


    /**
     * @param string $category
     * @return ApiCallHandler
     */
    public function setCategory($category) {
        $this->_category = $category;
        return $this;
    }

    /**
     * @param string $subcategory
     * @return ApiCallHandler
     */
    public function setSubCategory($subcategory) {
        $this->_subcategory = $subcategory;
        return $this;
    }

    /**
     * @param int $id
     * @return ApiCallHandler
     */
    public function setId($id) {
        $this->_id = $id;
        return $this;
    }
}