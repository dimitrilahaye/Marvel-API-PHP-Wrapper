<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\DataContainer;

abstract class CreatorsDataContainerMapper
{
	static public function map(array $array)
	{
		$obj = new DataContainer();
		$obj->setOffset($array["offset"]);
		$obj->setLimit($array["limit"]);
		$obj->setTotal($array["total"]);
		$obj->setCount($array["count"]);
		$obj->setResults(array_map(function($o) {
			return CreatorsListMapper::map($o);
		}, $array["results"]));  // TODO : call mapper dep on the type of result (Comics, Creators, ...)
		return $obj;
	}
}