<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Stories;

abstract class StoriesMapper
{
	static public function map(array $array)
	{
		$obj = new Stories();
		$obj->setId($array["id"])
		$obj->setTitle($array["title"])
		$obj->setDescription($array["description"])
		$obj->setResourceURI($array["resourceURI"])
		$obj->setType($array["type"])
		$obj->setModified($array["modified"])
		$obj->setThumbnail($array["thumbnail"])
		$obj->setComics($array["comics"])
		$obj->setSeries($array["series"])
		$obj->setEvents($array["events"])
		$obj->setCharacters($array["characters"])
		$obj->setCreators($array["creators"])
		$obj->setOriginalissue($array["originalissue"])
		return $obj;
	}
}