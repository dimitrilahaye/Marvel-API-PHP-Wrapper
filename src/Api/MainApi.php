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

/**
 * Class MainApi
 * @package DimitriLahaye\Api
 *
 * Gives access to component in charge of send request to Marvel API servers.
 * Parent class of all Api classes.
 */
class MainApi
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
     * @var array
     */
    protected $_config;

	/**
	 * Constructor.
	 * @param array $config
	 */
	public function __construct($config)
	{
        $this->_config = $config;
        $this->_apiHandler = new ApiCallHandler($config);
	}

    /**
     * Return a response from the Marvel API depending on the category or sub-category.
     * This method will build the url to call with the category, id, subcategory and filters setted earlier.
     * Take care that given Filter instance corresponds to the current category or sub-category you called.
     * Example of category : 'MarvelApi::getComics()' => 'comics' is the category. Will need {ComicsFilter} instance.
     * Example of sub-category : 'MarvelApi::getComics(11223)->creators()' => 'creators' is the sub-category. Will need {CreatorsFilter} instance.
     * @param Filter $filter
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