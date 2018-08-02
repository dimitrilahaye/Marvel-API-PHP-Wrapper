<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\CharactersList;

abstract class CharactersListMapper
{
	static public function map(array $array)
	{
		$obj = new CharactersList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems($array["items"]);
		return $obj;
	}
}