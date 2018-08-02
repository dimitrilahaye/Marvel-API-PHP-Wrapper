<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\SeriesSummary;

abstract class SeriesSummaryMapper
{
	static public function map(array $array)
	{
		$obj = new SeriesSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		return $obj;
	}
}