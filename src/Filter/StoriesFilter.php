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