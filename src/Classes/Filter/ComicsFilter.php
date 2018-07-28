<?php

namespace DimitriLahaye\Filter;

class ComicsFilter extends Filter
{
	/**
	 * Filter by the issue format (e.g. comic, digital comic, hardcover).
	 * Accepted values are ["comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic"].
	 * @param string $format
	 * @return Filter
	 */
	public function format(string $format)
	{
		$this->_body = array_merge($this->_body, array("format" => $format));
		return $this;
	}
	/**
	 * Filter by the issue format type (comic or collection).
	 * Accepted values are ["comic", "collection"].
	 * @param string $formatType
	 * @return Filter
	 */
	public function formatType(string $formatType)
	{
		$this->_body = array_merge($this->_body, array("formatType" => $formatType));
		return $this;
	}
	/**
	 * Exclude variants (alternate covers, secondary printings, director's cuts, etc.) from the result set.
	 * @param boolean $noVariants
	 * @return Filter
	 */
	public function noVariants(boolean $noVariants)
	{
		$this->_body = array_merge($this->_body, array("noVariants" => $noVariants));
		return $this;
	}
	/**
	 * Return comics within a predefined date range.
	 * Accepted values are ["lastWeek", "thisWeek", "nextWeek", "thisMonth"].
	 * @param string $dateDescriptor
	 * @return Filter
	 */
	public function dateDescriptor(string $dateDescriptor)
	{
		$this->_body = array_merge($this->_body, array("dateDescriptor" => $dateDescriptor));
		return $this;
	}
	/**
	 * Return comics within a predefined date range.
	 * Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).
	 * Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
	 * @param array $dateRange
	 * @return Filter
	 */
	public function dateRange(array $dateRange)
	{
		$this->_body = array_merge($this->_body, array("dateRange" => implode(",", $dateRange)));
		return $this;
	}
	/**
	 * Return only issues in series whose issue number matches the input.
	 * @param int $issueNumber
	 * @return Filter
	 */
	public function issueNumber(int $issueNumber)
	{
		$this->_body = array_merge($this->_body, array("issueNumber" => $issueNumber));
		return $this;
	}
	/**
	 * Filter by diamond code.
	 * @param string $diamondCode
	 * @return Filter
	 */
	public function diamondCode(string $diamondCode)
	{
		$this->_body = array_merge($this->_body, array("diamondCode" => $diamondCode));
		return $this;
	}
	/**
	 * Filter by digital comic id.
	 * @param int $digitalId
	 * @return Filter
	 */
	public function digitalId(int $digitalId)
	{
		$this->_body = array_merge($this->_body, array("digitalId" => $digitalId));
		return $this;
	}
	/**
	 * Filter by UPC.
	 * @param string $upc
	 * @return Filter
	 */
	public function upc(string $upc)
	{
		$this->_body = array_merge($this->_body, array("upc" => $upc));
		return $this;
	}
	/**
	 * Filter by ISBN.
	 * @param string $isbn
	 * @return Filter
	 */
	public function isbn(string $isbn)
	{
		$this->_body = array_merge($this->_body, array("isbn" => $isbn));
		return $this;
	}
	/**
	 * Filter by EAN.
	 * @param string $ean
	 * @return Filter
	 */
	public function ean(string $ean)
	{
		$this->_body = array_merge($this->_body, array("ean" => $ean));
		return $this;
	}
	/**
	 * Filter by ISSN.
	 * @param string $issn
	 * @return Filter
	 */
	public function issn(string $issn)
	{
		$this->_body = array_merge($this->_body, array("issn" => $issn));
		return $this;
	}
	/**
	 * Include only results which are available digitally.
	 * @param boolean $hasDigitalIssue
	 * @return Filter
	 */
	public function hasDigitalIssue(boolean $hasDigitalIssue)
	{
		$this->_body = array_merge($this->_body, array("hasDigitalIssue" => $hasDigitalIssue));
		return $this;
	}
	/**
	 * Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). Accepts a comma-separated list of ids.
	 * @param array $sharedAppearances
	 * @return Filter
	 */
	public function sharedAppearances(array $sharedAppearances)
	{
		$this->_body = array_merge($this->_body, array("sharedAppearances" => implode(",", $sharedAppearances)));
		return $this;
	}
	/**
	 * Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). Accepts a comma-separated list of ids.
	 * @param array $collaborators
	 * @return Filter
	 */
	public function collaborators(array $collaborators)
	{
		$this->_body = array_merge($this->_body, array("collaborators" => implode(",", $collaborators)));
		return $this;
	}
}