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
		$obj->setItems($array["items"]);
		return $obj;
	}
}