<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\DataContainer;

abstract class DataContainerMapper
{
	static public function map(array $array)
	{
		$obj = new DataContainer();
		$obj->setOffset($array["offset"]);
		$obj->setLimit($array["limit"]);
		$obj->setTotal($array["total"]);
		$obj->setCount($array["count"]);
		$obj->setResults($array["results"]);
		return $obj;
	}
}