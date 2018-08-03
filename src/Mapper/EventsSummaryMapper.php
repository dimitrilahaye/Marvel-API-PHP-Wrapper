<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\EventsSummary;

abstract class EventsSummaryMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new EventsSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		return $obj;
	}
}