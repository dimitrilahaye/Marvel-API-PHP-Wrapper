<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\StoriesList;

abstract class StoriesListMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new StoriesList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems(array_map(function($o) {
			return StoriesSummaryMapper::map($o);
		}, $array["items"]));
		return $obj;
	}
}