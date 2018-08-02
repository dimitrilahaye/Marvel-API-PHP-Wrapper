<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Comics;

abstract class ComicsMapper
{
	static public function map(array $array)
	{
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
		$obj->setSeries(array_map(function($o) {
			return SeriesMapper::map($o);
		}, $array["series"]));
		$obj->setCreators(array_map(function($o) {
			return CreatorsMapper::map($o);
		}, $array["creators"]));
		$obj->setCharacters(array_map(function($o) {
			return CharactersMapper::map($o);
		}, $array["characters"]));
		$obj->setStories(array_map(function($o) {
			return StoriesMapper::map($o);
		}, $array["stories"]));
		$obj->setEvents(array_map(function($o) {
			return EventsMapper::map($o);
		}, $array["events"]));
		return $obj;
	}
}