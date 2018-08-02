<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\SeriesList;

abstract class SeriesListMapper
{
	static public function map(array $array)
	{
		$obj = new SeriesList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems($array["items"]);
		return $obj;
	}
}