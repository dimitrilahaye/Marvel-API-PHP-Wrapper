<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\DataContainer;

abstract class ComicsDataContainerMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new DataContainer();
		$obj->setOffset($array["offset"]);
		$obj->setLimit($array["limit"]);
		$obj->setTotal($array["total"]);
		$obj->setCount($array["count"]);
		$obj->setResults(array_map(function($o) {
			return ComicsMapper::map($o);
		}, $array["results"]));
		return $obj;
	}
}