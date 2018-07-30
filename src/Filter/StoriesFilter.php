<?php

namespace DimitriLahaye\Filter;

class StoriesFilter extends Filter
{
	// orderBy filterings
    const ORDERBY_ID_ASC = "id";
    const ORDERBY_MODIFIED_ASC = "modified";
    const ORDERBY_ID_DESC = "-id";
    const ORDERBY_MODIFIED_DESC = "-modified";

    /**
     * Limit the result set to the specified number of resources.
     * @param int $limit
     * @return StoriesFilter
     */
    public function limit(int $limit)
    {
        $this->_body = array_merge($this->_body, array("limit" => $limit));
        return $this;
    }

    /**
     * Skip the specified number of resources in the result set.
     * @param int $offset
     * @return StoriesFilter
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
     * @return StoriesFilter
     */
    public function orderBy(string $orderBy)
    {
        $this->_body = array_merge($this->_body, array("orderBy" => $orderBy));
        return $this;
    }

    /**
     * Return only characters which have been modified since the specified date.
     * @param string $modifiedSince
     * @return StoriesFilter
     */
    public function modifiedSince(string $modifiedSince)
    {

        $this->_body = array_merge($this->_body, array("modifiedSince" => $modifiedSince));
        return $this;
    }

	/**
	 * Return only stories contained in the specified ids.
	 * @param array $comics
	 * @return StoriesFilter
	 */
	public function comics(array $comics)
	{

		$this->_body = array_merge($this->_body, array("comics" => implode(",", $comics)));
		return $this;
	}


	/**
	 * Return only stories contained the specified series ids.
	 * @param array $series
	 * @return StoriesFilter
	 */
	public function series(array $series)
	{

		$this->_body = array_merge($this->_body, array("series" => implode(",", $series)));
		return $this;
	}

	/**
	 * Return only stories which feature work by the specified cre@ators ids.
	 * @param array $creators
	 * @return StoriesFilter
	 */
	public function creators(array $creators)
	{
		$this->_body = array_merge($this->_body, array("creators" => implode(",", $creators)));
		return $this;
	}

	/**
	 * Return only stories which take place during the specified events ids.
	 * @param array $events
	 * @return StoriesFilter
	 */
	public function events(array $events)
	{

		$this->_body = array_merge($this->_body, array("events" => implode(",", $events)));
		return $this;
	}
}