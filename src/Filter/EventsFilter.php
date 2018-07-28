<?php

namespace DimitriLahaye\Filter;

class EventsFilter extends Filter
{
	// orderBy filterings
    const ORDERBY_NAME_ASC = "name";
    const ORDERBY_STARTDATE_ASC = "startDate";
    const ORDERBY_MODIFIED_ASC = "modified";
    const ORDERBY_NAME_DESC = "-name";
    const ORDERBY_STARTDATE_DESC = "-startDate";
    const ORDERBY_MODIFIED_DESC = "-modified";

	/**
	 * Return only events which feature the specified characters ids.
	 * @param array $characters
	 * @return EventsFilter
	 */
	public function characters(array $characters)
	{
		$this->_body = array_merge($this->_body, array("characters" => implode(",", $characters)));
		return $this;
	}

	/**
	 * Return only events which match the specified name.
	 * @param string $name
	 * @return EventsFilter
	 */
	public function name(string $name)
	{

		$this->_body = array_merge($this->_body, array("name" => $name));
		return $this;
	}

	/**
	 * Return events with names that begin with the specified string (e.g. Sp).
	 * @param string $nameStartsWith
	 * @return EventsFilter
	 */
	public function nameStartsWith(string $nameStartsWith)
	{

		$this->_body = array_merge($this->_body, array("nameStartsWith" => $nameStartsWith));
		return $this;
	}

	/**
	 * Return only events which take place in the specified comics ids.
	 * @param array $comics
	 * @return EventsFilter
	 */
	public function comics(array $comics)
	{

		$this->_body = array_merge($this->_body, array("comics" => implode(",", $comics)));
		return $this;
	}

	/**
	 * Return only events which are part of the specified series ids.
	 * @param array $series
	 * @return EventsFilter
	 */
	public function series(array $series)
	{

		$this->_body = array_merge($this->_body, array("series" => implode(",", $series)));
		return $this;
	}

	/**
	 * Return only events which take place in the specified stories ids.
	 * @param array $stories
	 * @return EventsFilter
	 */
	public function stories(array $stories)
	{

		$this->_body = array_merge($this->_body, array("stories" => implode(",", $stories)));
		return $this;
	}

	/**
	 * Return only events which feature work by the specified creators ids.
	 * @param array $creators
	 * @return EventsFilter
	 */
	public function creators(array $creators)
	{
		$this->_body = array_merge($this->_body, array("creators" => implode(",", $creators)));
		return $this;
	}
}