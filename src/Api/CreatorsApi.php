<?php

namespace DimitriLahaye\Api;


use DimitriLahaye\Filter\ComicsFilter;
use DimitriLahaye\Filter\EventsFilter;
use DimitriLahaye\Filter\SeriesFilter;
use DimitriLahaye\Filter\StoriesFilter;
use DimitriLahaye\Filter\CreatorsFilter;


/**
 * Class CreatorsApi
 * @package DimitriLahaye\Api
 *
 * Gives access to the proper Creators' API
 */
class CreatorsApi extends MainApi
{

    /**
     * @var CreatorsFilter
     */
    private $_filter;

    /**
     * @return CreatorsFilter
     */
    public function filter() {
        return $this->_filter;
    }

    /**
     * @param CreatorsFilter $filter
     * @return CreatorsFilter
     */
    public function setFilter(CreatorsFilter $filter) {
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
} 