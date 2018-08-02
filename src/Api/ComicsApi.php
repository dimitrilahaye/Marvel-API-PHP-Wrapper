<?php

namespace DimitriLahaye\Api;


use DimitriLahaye\Filter\CharactersFilter;
use DimitriLahaye\Filter\ComicsFilter;
use DimitriLahaye\Filter\CreatorsFilter;
use DimitriLahaye\Filter\EventsFilter;
use DimitriLahaye\Filter\StoriesFilter;


/**
 * Class ComicsApi
 * @package DimitriLahaye\Api
 *
 * Gives access to the proper comics' API
 */
class ComicsApi extends MainApi
{

    /**
     * @var ComicsFilter
     */
    private $_filter;

    /**
     * ComicsApi constructor.
     */
    function __construct($config) {
        parent::__construct($config);
    }

    /**
     * @return ComicsFilter
     */
    public function filter() {
        return $this->_filter;
    }

    /**
     * @param ComicsFilter $filter
     * @return ComicsFilter
     */
    public function setFilter(ComicsFilter $filter) {
        $this->_filter = $filter;
    }

    /**
     * Get all the characters associated to a previous item called by its id.
     * @return CharactersApi
     */
    public function characters()
    {
        $this->_subcategory = "characters";
        $api = new CharactersApi($this->_config);
        $api->setCategory($this->_category);
        $api->setSubCategory($this->_subcategory);
        $api->setId($this->_id);
        $api->setFilter(new CharactersFilter());
        return $api;
    }

    /**
     * Get all the creators associated to a previous item called by its id.
     * @return CreatorsApi
     */
    public function creators()
    {
        $this->_subcategory = "creators";
        $api = new CreatorsApi($this->_config);
        $api->setCategory($this->_category);
        $api->setSubCategory($this->_subcategory);
        $api->setId($this->_id);
        $api->setFilter(new CreatorsFilter());
        return $api;
    }

    /**
     * Get all the events associated to a previous item called by its id.
     * @return EventsApi
     */
    public function events()
    {
        $this->_subcategory = "events";
        $api = new EventsApi($this->_config);
        $api->setCategory($this->_category);
        $api->setSubCategory($this->_subcategory);
        $api->setId($this->_id);
        $api->setFilter(new EventsFilter());
        return $api;
    }

    /**
     * Get all the stories associated to a previous item called by its id.
     * @return StoriesApi
     */
    public function stories()
    {
        $this->_subcategory = "stories";
        $api = new StoriesApi($this->_config);
        $api->setCategory($this->_category);
        $api->setSubCategory($this->_subcategory);
        $api->setId($this->_id);
        $api->setFilter(new StoriesFilter());
        return $api;
    }
} 