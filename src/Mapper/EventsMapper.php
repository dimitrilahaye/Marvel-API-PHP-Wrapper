<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Events;

abstract class EventsMapper
{
	static public function map(array $array)
	{
		$obj = new Events();
		$obj->setId($array["id"]);
		$obj->setTitle($array["title"]);
		$obj->setDescription($array["description"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setUrls($array["urls"]);
		$obj->setModified($array["modified"]);
		$obj->setStart($array["start"]);
		$obj->setEnd($array["end"]);
		$obj->setThumbnail($array["thumbnail"]);
		$obj->setComics($array["comics"]);
		$obj->setStories($array["stories"]);
		$obj->setSeries($array["series"]);
		$obj->setCharacters($array["characters"]);
		$obj->setCreators($array["creators"]);
		$obj->setNext($array["next"]);
		$obj->setPrevious($array["previous"]);
		return $obj;
	}
}