<?php

namespace DimitriLahaye\Filter;

class CreatorsFilter extends Filter
{

    const ORDERBY_LASTNAME_ASC = "lastName";
    const ORDERBY_FIRSTNAME_ASC = "firstName";
    const ORDERBY_MIDDLENAME_ASC = "middleName";
    const ORDERBY_SUFFIX_ASC = "suffix";
    const ORDERBY_MODIFIED_ASC = "modified";
    const ORDERBY_-LASTNAME_DESC = "-lastName";
    const ORDERBY_-FIRSTNAME_DESC = "-firstName";
    const ORDERBY_-MIDDLENAME_DESC = "-middleName";
    const ORDERBY_-SUFFIX_DESC = "-suffix";
    const ORDERBY_-MODIFIED_DESC = "-modified";

    /**
	 * Filter by creator first name (e.g. Brian).
	 * @param string $firstName
	 * @return CreatorsFilter
	 */
	public function firstName(string $firstName)
	{
		$this->_body = array_merge($this->_body, array("firstName" => $firstName));
		return $this;
	}


	/*
	 * Filter by creator middle name (e.g. Michael).
	 * @param string $middleName
	 * @return CreatorsFilter
	 */
	public function middleName(string $middleName)
	{
		$this->_body = array_merge($this->_body, array("middleName" => $middleName));
		return $this;
	}


	/*
	 * Filter by creator last name (e.g. Bendis).
	 * @param string $lastName
	 * @return CreatorsFilter
	 */
	public function lastName(string $lastName)
	{
		$this->_body = array_merge($this->_body, array("lastName" => $lastName));
		return $this;
	}


	/*
	 * Filter by suffix or honorific (e.g. Jr., Sr.).
	 * @param string $suffix
	 * @return CreatorsFilter
	 */
	public function suffix(string $suffix)
	{
		$this->_body = array_merge($this->_body, array("suffix" => $suffix));
		return $this;
	}


	/*
	 * Filter by creator first names that match critera (e.g. B, St L).
	 * @param string $firstNameStartsWith
	 * @return CreatorsFilter
	 */
	public function firstNameStartsWith(string $firstNameStartsWith)
	{
		$this->_body = array_merge($this->_body, array("firstNameStartsWith" => $firstNameStartsWith));
		return $this;
	}


	/*
	 * Filter by creator middle names that match critera (e.g. Mi).
	 * @param string $middleNameStartsWith
	 * @return CreatorsFilter
	 */
	public function middleNameStartsWith(string $middleNameStartsWith)
	{
		$this->_body = array_merge($this->_body, array("middleNameStartsWith" => $middleNameStartsWith));
		return $this;
	}


	/*
	 * Filter by creator last names that match critera (e.g. Ben).
	 * @param string $lastNameStartsWith
	 * @return CreatorsFilter
	 */
	public function lastNameStartsWith(string $lastNameStartsWith)
	{
		$this->_body = array_merge($this->_body, array("lastNameStartsWith" => $lastNameStartsWith));
		return $this;
	}

	/**
	 * Filter by creator names that match critera (e.g. B, St L).
	 * @param string $nameStartsWith
	 * @return CreatorsFilter
	 */
	public function nameStartsWith(string $nameStartsWith)
	{

		$this->_body = array_merge($this->_body, array("nameStartsWith" => $nameStartsWith));
		return $this;
	}

	/**
	 * Return only creators who worked on the specified series ids.
	 * @param array $comics
	 * @return CreatorsFilter
	 */
	public function events(array $events)
	{

		$this->_body = array_merge($this->_body, array("events" => implode(",", $events)));
		return $this;
	}

	/**
	 * Return only creators who worked on in the specified comics ids.
	 * @param array $comics
	 * @return CreatorsFilter
	 */
	public function comics(array $comics)
	{

		$this->_body = array_merge($this->_body, array("comics" => implode(",", $comics)));
		return $this;
	}

	/**
	 * Return only creators who worked on the specified series ids.
	 * @param array $series
	 * @return CreatorsFilter
	 */
	public function series(array $series)
	{

		$this->_body = array_merge($this->_body, array("series" => implode(",", $series)));
		return $this;
	}

	/**
	 * Return only creators who worked on the specified stories ids.
	 * @param array $stories
	 * @return CreatorsFilter
	 */
	public function stories(array $stories)
	{

		$this->_body = array_merge($this->_body, array("stories" => implode(",", $stories)));
		return $this;
	}
}