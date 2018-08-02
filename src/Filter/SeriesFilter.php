<?php

namespace DimitriLahaye\Filter;

/**
 * Class SeriesFilter
 * @package DimitriLahaye\Filter
 *
 * Filter class for SeriesApi
 */
class SeriesFilter extends Filter
{

	// contains filtering
	const CONTAINS_COMIC = "comic";
	const CONTAINS_MAGAZINE = "magazine";
	const CONTAINS_TRADE_PAPERBACK = "trade paperback";
	const CONTAINS_HARDCOVER = "hardcover";
	const CONTAINS_DIGEST = "digest";
	const CONTAINS_GRAPHIC_NOVEL = "graphic novel";
	const CONTAINS_DIGITAL_COMIC = "digital comic";
	const CONTAINS_INFINITE_COMIC = "infinite comic";
	// seriesType filtering
	const SERIESTYPE_COLLECTION = "collection";
	const SERIESTYPE_ONE_SHOT = "one shot";
	const SERIESTYPE_LIMITED = "limited";
	const SERIESTYPE_ONGOING = "ongoing";
	// orderBy filterings
    const ORDERBY_TITLE_ASC = "title";
    const ORDERBY_MODIFIED_ASC = "modified";
    const ORDERBY_STARTYEAR_ASC = "startYear";
    const ORDERBY_TITLE_DESC = "-title";
    const ORDERBY_MODIFIED_DESC = "-modified";
    const ORDERBY_STARTYEAR_DESC = "-startYear";

    /**
     * Limit the result set to the specified number of resources.
     * @param int $limit
     * @return SeriesFilter
     */
    public function limit(int $limit)
    {
        $this->_body = array_merge($this->_body, array("limit" => $limit));
        return $this;
    }

    /**
     * Skip the specified number of resources in the result set.
     * @param int $offset
     * @return SeriesFilter
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
     * @return SeriesFilter
     */
    public function orderBy(string $orderBy)
    {
        $this->_body = array_merge($this->_body, array("orderBy" => $orderBy));
        return $this;
    }

    /**
     * Return only characters which have been modified since the specified date.
     * @param string $modifiedSince
     * @return SeriesFilter
     */
    public function modifiedSince(string $modifiedSince)
    {

        $this->_body = array_merge($this->_body, array("modifiedSince" => $modifiedSince));
        return $this;
    }

	/**
	 * Return only series containing one or more comics with the specified format.
	 * Accepted values are ["comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic"].
	 * @param string $contains
	 * @return SeriesFilter
	 */
	public function contains(string $contains)
	{
		$this->_body = array_merge($this->_body, array("contains" => $contains));
		return $this;
	}

	/**
	 * Filter the series by publication frequency type.
	 * Accepted values are ["collection", "one shot", "limited", "ongoing"].
	 * @param string $seriesType
	 * @return SeriesFilter
	 */
	public function seriesType(string $seriesType)
	{
		$this->_body = array_merge($this->_body, array("seriesType" => $seriesType));
		return $this;
	}

	/**
	 * Return only series which contain the specified comics ids.
	 * @param array $comics
	 * @return SeriesFilter
	 */
	public function comics(array $comics)
	{

		$this->_body = array_merge($this->_body, array("comics" => implode(",", $comics)));
		return $this;
	}

	/**
	 * Return only series which feature work by the specified creators ids.
	 * @param array $creators
	 * @return SeriesFilter
	 */
	public function creators(array $creators)
	{
		$this->_body = array_merge($this->_body, array("creators" => implode(",", $creators)));
		return $this;
	}

	/**
	 * Return only series which have comics that take place during the specified events ids.
	 * @param array $events
	 * @return SeriesFilter
	 */
	public function events(array $events)
	{

		$this->_body = array_merge($this->_body, array("events" => implode(",", $events)));
		return $this;
	}

	/**
	 * Return only series which contain the specified stories ids.
	 * @param array $stories
	 * @return SeriesFilter
	 */
	public function stories(array $stories)
	{

		$this->_body = array_merge($this->_body, array("stories" => implode(",", $stories)));
		return $this;
	}

	/**
	 * Return only series matching the specified title.
	 * @param string $title
	 * @return SeriesFilter
	 */
	public function title(string $title)
	{
		$this->_body = array_merge($this->_body, array("title" => $title));
		return $this;
	}

	/**
	 * Return series with titles that begin with the specified string (e.g. Sp).
	 * @param string $titleStartsWith
	 * @return SeriesFilter
	 */
	public function titleStartsWith(string $titleStartsWith)
	{
		$this->_body = array_merge($this->_body, array("titleStartsWith" => $titleStartsWith));
		return $this;
	}

	/**
	 * Return only series matching the specified start year.
	 * @param string $startYear
	 * @return SeriesFilter
	 */
	public function startYear(string $startYear)
	{
		$this->_body = array_merge($this->_body, array("startYear" => $startYear));
		return $this;
	}
}