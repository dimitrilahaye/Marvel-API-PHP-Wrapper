<?php

namespace DimitriLahaye\Filter;

/**
 * Class Filter
 * @package DimitriLahaye\Filter
 *
 * Parent class to each Filter
 */
class Filter
{
    /**
     * Associative array representing the filtering query part of the API request.
     * @var array
     */
    protected $_body = array();

    /**
     * Getter for the filtering query part.
     * @var array
     * @return array
     */
    public function getBody()
    {
        return $this->_body;
    }
}