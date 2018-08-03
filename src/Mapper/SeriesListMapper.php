<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\SeriesList;

abstract class SeriesListMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new SeriesList();
		$obj->setAvailable($array["available"]);
		$obj->setReturned($array["returned"]);
		$obj->setCollectionURI($array["collectionURI"]);
		$obj->setItems(array_map(function($o) {
			return SeriesSummaryMapper::map($o);
		}, $array["items"]));
		return $obj;
	}
}