<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\EventsList;

abstract class EventsListMapper
{
	static public function map(array $array)
	{
		$obj = new EventsList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems($array["items"]);
		return $obj;
	}
}