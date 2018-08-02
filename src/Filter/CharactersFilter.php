<?php

namespace DimitriLahaye\Filter;

/**
 * Class CharactersFilter
 * @package DimitriLahaye\Filter
 *
 * Filter class for CharactersApi
 */
class CharactersFilter extends Filter
{
	// orderBy filterings
	const ORDERBY_NAME_ASC = "name";
	const ORDERBY_MODIFIED_ASC = "modified";
	const ORDERBY_NAME_DESC = "-name";
	const ORDERBY_MODIFIED_DESC = "-modified";

    /**
     * Limit the result set to the specified number of resources.
     * @param int $limit
     * @return CharactersFilter
     */
    public function limit(int $limit)
    {
        $this->_body = array_merge($this->_body, array("limit" => $limit));
        return $this;
    }

    /**
     * Skip the specified number of resources in the result set.
     * @param int $offset
     * @return CharactersFilter
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
     * @return CharactersFilter
     */
    public function orderBy(string $orderBy)
    {
        $this->_body = array_merge($this->_body, array("orderBy" => $orderBy));
        return $this;
    }

    /**
     * Return only characters which have been modified since the specified date.
     * @param string $modifiedSince
     * @return CharactersFilter
     */
    public function modifiedSince(string $modifiedSince)
    {

        $this->_body = array_merge($this->_body, array("modifiedSince" => $modifiedSince));
        return $this;
    }

	/**
	 * Return only characters matching the specified full character name (e.g. Spider-Man).
	 * @param string $name
	 * @return CharactersFilter
	 */
	public function name(string $name)
	{

		$this->_body = array_merge($this->_body, array("name" => $name));
		return $this;
	}

	/**
	 * Return characters with names that begin with the specified string (e.g. Sp).
	 * @param string $nameStartsWith
	 * @return CharactersFilter
	 */
	public function nameStartsWith(string $nameStartsWith)
	{

		$this->_body = array_merge($this->_body, array("nameStartsWith" => $nameStartsWith));
		return $this;
	}

	/**
	 * Return only characters which appear in the specified comics ids.
	 * @param array $comics
	 * @return CharactersFilter
	 */
	public function comics(array $comics)
	{

		$this->_body = array_merge($this->_body, array("comics" => implode(",", $comics)));
		return $this;
	}

	/**
	 * Return only characters which appear the specified series ids.
	 * @param array $series
	 * @return CharactersFilter
	 */
	public function series(array $series)
	{

		$this->_body = array_merge($this->_body, array("series" => implode(",", $series)));
		return $this;
	}

	/**
	 * Return only characters which appear in the specified events ids.
	 * @param array $events
	 * @return CharactersFilter
	 */
	public function events(array $events)
	{

		$this->_body = array_merge($this->_body, array("events" => implode(",", $events)));
		return $this;
	}

	/**
	 * Return only characters which appear the specified stories ids.
	 * @param array $stories
	 * @return CharactersFilter
	 */
	public function stories(array $stories)
	{

		$this->_body = array_merge($this->_body, array("stories" => implode(",", $stories)));
		return $this;
	}	
}