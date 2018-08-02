<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\CharactersSummary;

abstract class CharactersSummaryMapper
{
	static public function map(array $array)
	{
		$obj = new CharactersSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		$obj->setRole($array["role"]);
		return $obj;
	}
}