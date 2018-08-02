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
		$obj->setTextObjects($array["textObjects"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setUrls($array["urls"]);
		$obj->setSeries($array["series"]);
		$obj->setVariants($array["variants"]);
		$obj->setCollections($array["collections"]);
		$obj->setCollectedIssues($array["collectedIssues"]);
		$obj->setDates($array["dates"]);
		$obj->setPrices($array["prices"]);
		$obj->setThumbnail($array["thumbnail"]);
		$obj->setImages($array["images"]);
		$obj->setCreators($array["creators"]);
		$obj->setCharacters($array["characters"]);
		$obj->setStories($array["stories"]);
		$obj->setEvents($array["events"]);
		return $obj;
	}
}