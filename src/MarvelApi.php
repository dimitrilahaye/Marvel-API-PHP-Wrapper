<?php

namespace DimitriLahaye;

use DimitriLahaye\Api\ComicsApi;
use DimitriLahaye\Api\CharactersApi;
use DimitriLahaye\Api\CreatorsApi;
use DimitriLahaye\Api\EventsApi;
use DimitriLahaye\Api\SeriesApi;
use DimitriLahaye\Api\StoriesApi;
use DimitriLahaye\Filter\ComicsFilter;
use DimitriLahaye\Filter\CharactersFilter;
use DimitriLahaye\Filter\CreatorsFilter;
use DimitriLahaye\Filter\EventsFilter;
use DimitriLahaye\Filter\SeriesFilter;
use DimitriLahaye\Filter\StoriesFilter;

/**
 * Class MarvelApi
 * @package DimitriLahaye
 *
 * Singleton in charge of returning MainApi instance depending on this class getter that will be used.
 */
class MarvelApi
{
	/**
	 * @var MarvelApi
	 */
	private static $_instance;
	
    /**
     * Marvel API configuration array.
     * It must have "public" and "private" keys which corresponds to
     * the public and private API key.
     * Optionnaly, it can have "scheme", "host", "port" and "version" keys
     * to build a specific URL to request the Marvel API.
     * @var array
     */
	private $_config;

	/**
	 * MarvelApi Constructor.
	 * The {$config} param will set the Api instance that will be return by MarvelApi's getters.
	 * @param array $config
	 * @throws \Exception if you don't pass your public and/or private keys into the {$config} array.
	 */
	private function __construct($config)
	{
		if ((!array_key_exists("public", $config))) {
			throw new \Exception("Public key missing!");
		}
		if ((!array_key_exists("private", $config))) {
			throw new \Exception("Private key missing!");
		}
        $this->_config = $config;
	}

	/**
	 * Configuration method for the Marvel API.
	 * The configuration array must have "public" and "private" keys which corresponds to
     * the public and private API key.
	 * Optionnaly, it can have "scheme", "host", "port" and "version" keys to build a
     * specific URL to request the Marvel API.
	 * @param array $config
	 * @return MarvelApi
	 */
	static public function config($config)
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new MarvelApi($config);
		}
		return self::$_instance;
	}

	/**
	 * Get the complete list of comics from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return ComicsApi
	 */
	static public function getComics(int $id = null)
	{
        $api = new ComicsApi(self::$_instance->_config);
        $api->setCategory("comics");
        $api->setId($id);
        $api->setFilter(new ComicsFilter());
        return $api;
	}

	/**
	 * Get the complete list of characters from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return CharactersApi
	 */
	static public function getCharacters(int $id = null)
	{
        $api = new CharactersApi(self::$_instance->_config);
        $api->setCategory("characters");
        $api->setId($id);
        $api->setFilter(new CharactersFilter());
        return $api;
	}

	/**
	 * Get the complete list of creators from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return CreatorsApi
	 */
	static public function getCreators(int $id = null)
	{
        $api = new CreatorsApi(self::$_instance->_config);
        $api->setCategory("creators");
        $api->setId($id);
        $api->setFilter(new CreatorsFilter());
        return $api;
	}

	/**
	 * Get the complete list of events from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return EventsApi
	 */
	static public function getEvents(int $id = null)
	{
        $api = new EventsApi(self::$_instance->_config);
        $api->setCategory("events");
        $api->setId($id);
        $api->setFilter(new EventsFilter());
        return $api;
	}

	/**
	 * Get the complete list of series from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return SeriesApi
	 */
	static public function getSeries(int $id = null)
	{
        $api = new SeriesApi(self::$_instance->_config);
        $api->setCategory("series");
        $api->setId($id);
        $api->setFilter(new SeriesFilter());
        return $api;
	}

	/**
	 * Get the complete list of stories from Marvel API.
	 * Or only one from the given $id if this parameter exists.
	 * @return StoriesApi
	 */
	static public function getStories(int $id = null)
	{
        $api = new StoriesApi(self::$_instance->_config);
        $api->setCategory("stories");
        $api->setId($id);
        $api->setFilter(new StoriesFilter());
        return $api;
	}
}