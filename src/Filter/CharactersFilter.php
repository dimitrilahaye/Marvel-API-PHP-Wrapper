<?php

namespace DimitriLahaye\Filter;

class CharactersFilter extends Filter
{
	// orderBy filterings
	const ORDERBY_NAME_ASC = "name";
	const ORDERBY_MODIFIED_ASC = "modified";
	const ORDERBY_NAME_DESC = "-name";
	const ORDERBY_MODIFIED_DESC = "-modified";

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