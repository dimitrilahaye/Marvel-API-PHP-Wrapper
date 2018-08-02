<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Series;

abstract class SeriesMapper
{
	static public function map(array $array)
	{
		$obj = new Series();
		$obj->setId($array["id"]);
		$obj->setTitle($array["title"]);
		$obj->setDescription($array["description"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setUrls($array["urls"]);
		$obj->setStartYear($array["startYear"]);
		$obj->setEndYear($array["endYear"]);
		$obj->setRating($array["rating"]);
		$obj->setModified($array["modified"]);
		$obj->setThumbnail($array["thumbnail"]);
		$obj->setComics($array["comics"]);
		$obj->setStories($array["stories"]);
		$obj->setEvents($array["events"]);
		$obj->setCharacters($array["characters"]);
		$obj->setCreators($array["creators"]);
		$obj->setNext($array["next"]);
		$obj->setPrevious($array["previous"]);
		return $obj;
	}
}