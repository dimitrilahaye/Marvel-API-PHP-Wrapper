<?php
/**
 * Created by PhpStorm.
 * User: dlmultimedias
 * Date: 30/07/18
 * Time: 21:14
 */

namespace DimitriLahaye\Api;


use DimitriLahaye\Filter\CharactersFilter;
use DimitriLahaye\Filter\ComicsFilter;
use DimitriLahaye\Filter\CreatorsFilter;
use DimitriLahaye\Filter\EventsFilter;
use DimitriLahaye\Filter\SeriesFilter;
use DimitriLahaye\Filter\StoriesFilter;

class StoriesApi extends MarvelApi
{

    /**
     * @var StoriesFilter
     */
    private $_filter;

    /**
     * @return StoriesFilter
     */
    public function filter() {
        return $this->_filter;
    }

    /**
     * @param StoriesFilter $filter
     * @return StoriesFilter
     */
    public function setFilter(StoriesFilter $filter) {
        $this->_filter = $filter;
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
        return $this;
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
        return $this;
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