<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\CharactersList;

abstract class CharactersListMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new CharactersList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems(array_map(function($o) {
			return CharactersSummaryMapper::map($o);
		}, $array["items"]));  //dep on the class of the current List (SeriesSummary, ComicsSummary...)
		return $obj;
	}
}