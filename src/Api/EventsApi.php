<?php

namespace DimitriLahaye\Api;


use DimitriLahaye\Filter\CharactersFilter;
use DimitriLahaye\Filter\ComicsFilter;
use DimitriLahaye\Filter\EventsFilter;
use DimitriLahaye\Filter\SeriesFilter;
use DimitriLahaye\Filter\StoriesFilter;
use DimitriLahaye\Filter\CreatorsFilter;


/**
 * Class EventsApi
 * @package DimitriLahaye\Api
 *
 * Gives access to the proper Events' API
 */
class EventsApi extends MainApi
{

    /**
     * @var EventsFilter
     */
    private $_filter;

    /**
     * @return EventsFilter
     */
    public function filter() {
        return $this->_filter;
    }

    /**
     * @param EventsFilter $filter
     * @return EventsFilter
     */
    public function setFilter(EventsFilter $filter) {
        $this->_filter = $filter;
    }

    /**
     * Get all the comics associated to a previous item called by its id.
     * @return ComicsApi
     */
    public function comics()
    {
        $this->_subcategory = "comics";
        $api = new ComicsApi($this->_config);
        $api->setCategory($this->_category);
        $api->setSubCategory($this->_subcategory);
        $api->setId($this->_id);
        $api->setFilter(new ComicsFilter());
        return $api;
    }

    /**
     * Get all the series associated to a previous item called by its id.
     * @return SeriesApi
     */
    public function series()
    {
        $this->_subcategory = "series";
        $api = new SeriesApi($this->_config);
        $api->setCategory($this->_category);
        $api->setSubCategory($this->_subcategory);
        $api->setId($this->_id);
        $api->setFilter(new SeriesFilter());
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
}