<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsSummary;

abstract class ComicsSummaryMapper
{
	static public function map(array $array)
	{
		$obj = new ComicsSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		return $obj;
	}
}