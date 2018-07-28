<?php

namespace DimitriLahaye\Filter;

class EventsFilter extends Filter
{
	/**
	 * Return only events which feature the specified characters (accepts a comma-separated list of ids).
	 * @param array $characters
	 * @return Filter
	 */
	public function characters(array $characters)
	{
		$this->_body = array_merge($this->_body, array("characters" => implode(",", $characters)));
		return $this;
	}
}