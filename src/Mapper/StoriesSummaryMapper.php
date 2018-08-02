<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\StoriesSummary;

abstract class StoriesSummaryMapper
{
	static public function map(array $array)
	{
		$obj = new StoriesSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		$obj->setType($array["type"]);
		return $obj;
	}
}