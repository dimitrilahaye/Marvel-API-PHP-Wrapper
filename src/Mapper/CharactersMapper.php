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
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); 
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setComics(array_map(function($o) {
			return ComicsMapper::map($o);
		},$array["comics"]));
		$obj->setStories(array_map(function($o) {
			return StoriesMapper::map($o);
		},$array["stories"]));
		$obj->setEvents(array_map(function($o) {
			return EventsMapper::map($o);
		},$array["events"]));
		$obj->setSeries(array_map(function($o) {
			return SeriesMapper::map($o);
		},$array["series"]));
		return $obj;
	}
}