<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Characters;

abstract class CharactersMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new Characters();
		$obj->setId($array["id"]);
		$obj->setName($array["name"]);
		$obj->setDescription($array["description"]);
		$obj->setModified($array["modified"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); 
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setComics(ComicsListMapper::map($array["comics"]));
		$obj->setStories(StoriesListMapper::map($array["stories"]));
		$obj->setEvents(EventsListMapper::map($array["events"]));
		$obj->setSeries(SeriesListMapper::map($array["series"]));
		return $obj;
	}
}