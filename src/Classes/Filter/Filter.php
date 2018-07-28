<?php

namespace DimitriLahaye\Filter;

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
	 */
	public function getBody()
	{
		return $this->_body;
	}

	/**
	 * Limit the result set to the specified number of resources.
	 * @param int $limit
	 * @return Filter
	 */
	public function limit(int $limit)
	{
		$this->_body = array_merge($this->_body, array("limit" => $limit));
		return $this;
	}

	/**
	 * Skip the specified number of resources in the result set.
	 * @param int $offset
	 * @return Filter
	 */
	public function offset(int $offset)
	{

		$this->_body = array_merge($this->_body, array("offset" => $offset));
		return $this;
	}

	/**
	 * Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values * are given priority in the order in which they are passed.
	 * Accepted values are ["name", "modified", "-name", "-modified"]
	 * @param string $orderBy
	 * @return Filter
	 */
	public function orderBy(string $orderBy)
	{
		$this->_body = array_merge($this->_body, array("orderBy" => $orderBy));
		return $this;
	}

	/**
	 * Return only characters which have been modified since the specified date.
	 * @param string $modifiedSince
	 * @return Filter
	 */
	public function modifiedSince(string $modifiedSince)
	{

		$this->_body = array_merge($this->_body, array("modifiedSince" => $modifiedSince));
		return $this;
	}
}