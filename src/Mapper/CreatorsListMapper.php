<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\CreatorsList;

abstract class CreatorsListMapper
{
	static public function map(array $array)
	{
		$obj = new CreatorsList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems($array["items"]);
		return $obj;
	}
}