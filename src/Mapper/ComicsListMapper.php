<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsList;

abstract class ComicsListMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new ComicsList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems(array_map(function($o) {
			return ComicsSummaryMapper::map($o);
		}, $array["items"])); // TODO :  mapper for array of objects dep on the class of the current List (SeriesSummary, ComicsSummary...)
		return $obj;
	}
}