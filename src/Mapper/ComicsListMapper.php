<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsList;

abstract class ComicsListMapper
{
	static public function map(array $array)
	{
		$obj = new ComicsList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems($array["items"]); // TODO :  mapper for array of objects dep on the class of the current List (SeriesSummary, ComicsSummary...)
		return $obj;
	}
}