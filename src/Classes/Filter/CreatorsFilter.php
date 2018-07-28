<?php

namespace DimitriLahaye\Filter;

class CreatorsFilter extends Filter
{

	/*
	 * Filter by creator first name (e.g. Brian).
	 * @param string $firstName
	 * @return Filter
	 */
	public function firstName(string $firstName)
	{
		$this->_body = array_merge($this->_body, array("firstName" => $firstName));
		return $this;
	}


	/*
	 * Filter by creator middle name (e.g. Michael).
	 * @param string $middleName
	 * @return Filter
	 */
	public function middleName(string $middleName)
	{
		$this->_body = array_merge($this->_body, array("middleName" => $middleName));
		return $this;
	}


	/*
	 * Filter by creator last name (e.g. Bendis).
	 * @param string $lastName
	 * @return Filter
	 */
	public function lastName(string $lastName)
	{
		$this->_body = array_merge($this->_body, array("lastName" => $lastName));
		return $this;
	}


	/*
	 * Filter by suffix or honorific (e.g. Jr., Sr.).
	 * @param string $suffix
	 * @return Filter
	 */
	public function suffix(string $suffix)
	{
		$this->_body = array_merge($this->_body, array("suffix" => $suffix));
		return $this;
	}


	/*
	 * Filter by creator first names that match critera (e.g. B, St L).
	 * @param string $firstNameStartsWith
	 * @return Filter
	 */
	public function firstNameStartsWith(string $firstNameStartsWith)
	{
		$this->_body = array_merge($this->_body, array("firstNameStartsWith" => $firstNameStartsWith));
		return $this;
	}


	/*
	 * Filter by creator middle names that match critera (e.g. Mi).
	 * @param string $middleNameStartsWith
	 * @return Filter
	 */
	public function middleNameStartsWith(string $middleNameStartsWith)
	{
		$this->_body = array_merge($this->_body, array("middleNameStartsWith" => $middleNameStartsWith));
		return $this;
	}


	/*
	 * Filter by creator last names that match critera (e.g. Ben).
	 * @param string $lastNameStartsWith
	 * @return Filter
	 */
	public function lastNameStartsWith(string $lastNameStartsWith)
	{
		$this->_body = array_merge($this->_body, array("lastNameStartsWith" => $lastNameStartsWith));
		return $this;
	}
}