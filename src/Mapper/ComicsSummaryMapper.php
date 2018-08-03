<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsSummary;

abstract class ComicsSummaryMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new ComicsSummary();
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setName($array["name"]);
		return $obj;
	}
}