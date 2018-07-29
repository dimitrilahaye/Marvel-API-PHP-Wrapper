<?php

namespace DimitriLahaye\Filter;

class ComicsFilter extends Filter
{
	
	// format filtering
	const FORMAT_COMIC = "comic";
	const FORMAT_MAGAZINE = "magazine";
	const FORMAT_TRADE_PAPERBACK = "trade paperback";
	const FORMAT_HARDCOVER = "hardcover";
	const FORMAT_DIGEST = "digest";
	const FORMAT_GRAPHIC_NOVEL = "graphic novel";
	const FORMAT_DIGITAL_COMIC = "digital comic";
	const FORMAT_INFINITE_COMIC = "infinite comic";
	// formatType filtering
	const FORMATTYPE_COMIC = "comic";
	const FORMATTYPE_COLLECTION = "collection";
	// dateDescriptor filtering
	const DATEDESCRIPTOR_LASTWEEK = "lastWeek";
	const DATEDESCRIPTOR_THISWEEK = "thisWeek";
	const DATEDESCRIPTOR_NEXTWEEK = "nextWeek";
	const DATEDESCRIPTOR_THISMONT = "thisMont";
	// orderBy filtering
	const ORDERBY_FOCDATE_ASC = "focDate";
	const ORDERBY_ONSALEDATE_ASC = "onsaleDate";
	const ORDERBY_TITLE_ASC = "title";
	const ORDERBY_ISSUENUMBER_ASC = "issueNumber";
	const ORDERBY_MODIFIED_ASC = "modified";
	const ORDERBY_-FOCDATE_DESC = "-focDate";
	const ORDERBY_-ONSALEDATE_DESC = "-onsaleDate";
	const ORDERBY_-TITLE_DESC = "-title";
	const ORDERBY_-ISSUENUMBER_DESC = "-issueNumber";
	const ORDERBY_-MODIFIED_DESC = "-modified";

	/**
	 * Filter by the issue format (e.g. comic, digital comic, hardcover).
	 * Accepted values are ["comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic"].
	 * @param string $format
	 * @return ComicsFilter
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
	 * @return ComicsFilter
	 */
	public function formatType(string $formatType)
	{
		$this->_body = array_merge($this->_body, array("formatType" => $formatType));
		return $this;
	}
	/**
	 * Exclude variants (alternate covers, secondary printings, director's cuts, etc.) from the result set.
	 * @param boolean $noVariants
	 * @return ComicsFilter
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
	 * @return ComicsFilter
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
	 * @return ComicsFilter
	 */
	public function dateRange(array $dateRange)
	{
		$this->_body = array_merge($this->_body, array("dateRange" => implode(",", $dateRange)));
		return $this;
	}
	/**
	 * Return only issues in series whose issue number matches the input.
	 * @param int $issueNumber
	 * @return ComicsFilter
	 */
	public function issueNumber(int $issueNumber)
	{
		$this->_body = array_merge($this->_body, array("issueNumber" => $issueNumber));
		return $this;
	}
	/**
	 * Filter by diamond code.
	 * @param string $diamondCode
	 * @return ComicsFilter
	 */
	public function diamondCode(string $diamondCode)
	{
		$this->_body = array_merge($this->_body, array("diamondCode" => $diamondCode));
		return $this;
	}
	/**
	 * Filter by digital comic id.
	 * @param int $digitalId
	 * @return ComicsFilter
	 */
	public function digitalId(int $digitalId)
	{
		$this->_body = array_merge($this->_body, array("digitalId" => $digitalId));
		return $this;
	}
	/**
	 * Filter by UPC.
	 * @param string $upc
	 * @return ComicsFilter
	 */
	public function upc(string $upc)
	{
		$this->_body = array_merge($this->_body, array("upc" => $upc));
		return $this;
	}
	/**
	 * Filter by ISBN.
	 * @param string $isbn
	 * @return ComicsFilter
	 */
	public function isbn(string $isbn)
	{
		$this->_body = array_merge($this->_body, array("isbn" => $isbn));
		return $this;
	}
	/**
	 * Filter by EAN.
	 * @param string $ean
	 * @return ComicsFilter
	 */
	public function ean(string $ean)
	{
		$this->_body = array_merge($this->_body, array("ean" => $ean));
		return $this;
	}
	/**
	 * Filter by ISSN.
	 * @param string $issn
	 * @return ComicsFilter
	 */
	public function issn(string $issn)
	{
		$this->_body = array_merge($this->_body, array("issn" => $issn));
		return $this;
	}
	/**
	 * Include only results which are available digitally.
	 * @param boolean $hasDigitalIssue
	 * @return ComicsFilter
	 */
	public function hasDigitalIssue(boolean $hasDigitalIssue)
	{
		$this->_body = array_merge($this->_body, array("hasDigitalIssue" => $hasDigitalIssue));
		return $this;
	}
	/**
	 * Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine ids.
	 * @param array $sharedAppearances
	 * @return ComicsFilter
	 */
	public function sharedAppearances(array $sharedAppearances)
	{
		$this->_body = array_merge($this->_body, array("sharedAppearances" => implode(",", $sharedAppearances)));
		return $this;
	}
	/**
	 * Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did ids.
	 * @param array $collaborators
	 * @return ComicsFilter
	 */
	public function collaborators(array $collaborators)
	{
		$this->_body = array_merge($this->_body, array("collaborators" => implode(",", $collaborators)));
		return $this;
	}

	/**
	 * Return only comics which feature work by the specified creators ids.
	 * @param array $creators
	 * @return ComicsFilter
	 */
	public function creators(array $creators)
	{
		$this->_body = array_merge($this->_body, array("creators" => implode(",", $creators)));
		return $this;
	}


	/**
	 * Return only comics which take place in the specified events ids.
	 * @param array $events
	 * @return ComicsFilter
	 */
	public function events(array $events)
	{

		$this->_body = array_merge($this->_body, array("events" => implode(",", $events)));
		return $this;
	}

	/**
	 * Return only comics which contain the specified stories ids.
	 * @param array $stories
	 * @return ComicsFilter
	 */
	public function stories(array $stories)
	{

		$this->_body = array_merge($this->_body, array("stories" => implode(",", $stories)));
		return $this;
	}


	/**
	 * Return only issues in series whose title matches the input.
	 * @param string $title
	 * @return ComicsFilter
	 */
	public function title(string $title)
	{
		$this->_body = array_merge($this->_body, array("title" => $title));
		return $this;
	}

	/**
	 * Return only issues in series whose title starts with the input.
	 * @param string $titleStartsWith
	 * @return ComicsFilter
	 */
	public function titleStartsWith(string $titleStartsWith)
	{
		$this->_body = array_merge($this->_body, array("titleStartsWith" => $titleStartsWith));
		return $this;
	}

	/**
	 * Return only issues in series whose start year matches the input.
	 * @param string $startYear
	 * @return ComicsFilter
	 */
	public function startYear(string $startYear)
	{
		$this->_body = array_merge($this->_body, array("startYear" => $startYear));
		return $this;
	}


	/**
	 * Return only comics which are part of the specified series ids.
	 * @param array $series
	 * @return ComicsFilter
	 */
	public function series(array $series)
	{

		$this->_body = array_merge($this->_body, array("series" => implode(",", $series)));
		return $this;
	}
}