<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Characters;

abstract class CharactersMapper
{
	static public function map(array $array)
	{
		$obj = new Characters();
		$obj->setId($array["id"]);
		$obj->setName($array["name"]);
		$obj->setDescription($array["description"]);
		$obj->setModified($array["modified"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setUrls($array["urls"]);
		$obj->setThumbnail($array["thumbnail"]);
		$obj->setComics($array["comics"]);
		$obj->setStories($array["stories"]);
		$obj->setEvents($array["events"]);
		$obj->setSeries($array["series"]);
		return $obj;
	}
}