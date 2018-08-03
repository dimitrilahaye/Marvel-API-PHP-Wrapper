<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Comics;

abstract class ComicsMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new Comics();
		$obj->setId($array["id"]);
		$obj->setDigitalId($array["digitalId"]);
		$obj->setTitle($array["title"]);
		$obj->setIssueNumber($array["issueNumber"]);
		$obj->setVariantDescription($array["variantDescription"]);
		$obj->setDescription($array["description"]);
		$obj->setModified($array["modified"]);
		$obj->setIsbn($array["isbn"]);
		$obj->setUpc($array["upc"]);
		$obj->setDiamondCode($array["diamondCode"]);
		$obj->setEan($array["ean"]);
		$obj->setIssn($array["issn"]);
		$obj->setFormat($array["format"]);
		$obj->setPageCount($array["pageCount"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setVariants($array["variants"]);
		$obj->setCollections($array["collections"]);
		$obj->setCollectedIssues($array["collectedIssues"]);
		$obj->setDates($array["dates"]);
		$obj->setPrices($array["prices"]);
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setTextObjects(array_map(function($o) {
			return TextObjectMapper::map($o);
		}, $array["textObjects"]));
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); 
		$obj->setImages(array_map(function($o) {
			return ImagesMapper::map($o);
		}, $array["images"])); 
		$obj->setSeries(SeriesListMapper::map($array["series"]));
		$obj->setCreators(CreatorsListMapper::map($array["creators"]));
		$obj->setSeries(CharactersListMapper::map($array["characters"]));
		$obj->setStories(StoriesListMapper::map($array["stories"]));
		$obj->setEvents(EventsListMapper::map($array["events"]));
		return $obj;
	}
}