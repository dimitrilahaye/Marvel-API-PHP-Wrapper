<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\StoriesSummary;

abstract class StoriesSummaryMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new StoriesSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		$obj->setType($array["type"]);
		return $obj;
	}
}