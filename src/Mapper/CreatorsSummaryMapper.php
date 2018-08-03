<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\CreatorsSummary;

abstract class CreatorsSummaryMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new CreatorsSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		$obj->setRole($array["role"]);
		return $obj;
	}
}