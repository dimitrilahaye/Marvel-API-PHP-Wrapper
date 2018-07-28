<?php

namespace DimitriLahaye\Filter;

class Filter
{

	/**
	 * Associative array representing the filtering query part of the API request.
	 * @var array
	 */
	private $_body = array();

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

	/*
	characters
	events
	*/
	public function name(string $name)
	{

		$this->_body = array_merge($this->_body, array("name" => $name));
		return $this;
	}

	/*
	characters
	events
	creators
	*/
	public function nameStartsWith(string $nameStartsWith)
	{

		$this->_body = array_merge($this->_body, array("nameStartsWith" => $nameStartsWith));
		return $this;
	}

	/*
	characters
	events
	series
	creators
	stories
	*/
	public function comics(array $comics)
	{

		$this->_body = array_merge($this->_body, array("comics" => implode(",", $comics)));
		return $this;
	}

	/*
	characters
	events
	comics
	creators
	stories
	*/
	public function series(array $series)
	{

		$this->_body = array_merge($this->_body, array("series" => implode(",", $series)));
		return $this;
	}

	/*
	characters
	comics
	series
	stories
	*/
	public function events(array $events)
	{

		$this->_body = array_merge($this->_body, array("events" => implode(",", $events)));
		return $this;
	}

	/*
	characters
	events
	comics
	series
	creators
	*/
	public function stories(array $stories)
	{

		$this->_body = array_merge($this->_body, array("stories" => implode(",", $stories)));
		return $this;
	}
	/*
	comics
	events
	series
	stories
	*/
	public function creators(array $creators)
	{
		$this->_body = array_merge($this->_body, array("creators" => implode(",", $creators)));
		return $this;
	}

	/*
	comics
	series
	*/
	public function title(string $title)
	{
		$this->_body = array_merge($this->_body, array("title" => $title));
		return $this;
	}
	/*
	comics
	series
	*/
	public function titleStartsWith(string $titleStartsWith)
	{
		$this->_body = array_merge($this->_body, array("titleStartsWith" => $titleStartsWith));
		return $this;
	}
	/*
	comics
	series
	*/
	public function startYear(string $startYear)
	{
		$this->_body = array_merge($this->_body, array("startYear" => $startYear));
		return $this;
	}
}