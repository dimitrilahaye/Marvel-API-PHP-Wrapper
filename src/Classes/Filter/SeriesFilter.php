<?php

namespace DimitriLahaye\Filter;

class SeriesFilter extends Filter
{

	/**
	 * Return only series containing one or more comics with the specified format.
	 * Accepted values are ["comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic"].
	 * @param string $contains
	 * @return Filter
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
	 * @return Filter
	 */
	public function seriesType(string $seriesType)
	{
		$this->_body = array_merge($this->_body, array("seriesType" => $seriesType));
		return $this;
	}	
}