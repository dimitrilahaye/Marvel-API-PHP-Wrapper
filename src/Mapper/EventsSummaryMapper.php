<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\EventsSummary;

abstract class EventsSummaryMapper
{
	static public function map(array $array)
	{
		$obj = new EventsSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		return $obj;
	}
}