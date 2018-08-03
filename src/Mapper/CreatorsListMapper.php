<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\CreatorsList;

abstract class CreatorsListMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new CreatorsList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems(array_map(function($o) {
			return CreatorsSummaryMapper::map($o);
		}, $array["items"]));
		return $obj;
	}
}