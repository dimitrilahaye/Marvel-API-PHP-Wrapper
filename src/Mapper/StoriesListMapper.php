<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\StoriesList;

abstract class StoriesListMapper
{
	static public function map(array $array)
	{
		$obj = new StoriesList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems($array["items"]); // TODO :  mapper for array of objects dep on the class of the current List (SeriesSummary, ComicsSummary...)
		return $obj;
	}
}