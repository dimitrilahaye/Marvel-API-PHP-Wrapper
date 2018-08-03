<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Events;

abstract class EventsMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new Events();
		$obj->setId($array["id"]);
		$obj->setTitle($array["title"]);
		$obj->setDescription($array["description"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setModified($array["modified"]);
		$obj->setStart($array["start"]);
		$obj->setEnd($array["end"]);
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); // TODO : mapper for array of objects
		$obj->setComics(ComicsListMapper::map($array["comics"])); // TODO : mapper for array of objects;
		$obj->setStories(StoriesListMapper::map($array["stories"])); // TODO : mapper for array of objects;
		$obj->setSeries(SeriesListMapper::map($array["series"]));
		$obj->setSeries(CharactersListMapper::map($array["characters"]));
		$obj->setCreators(CreatorsListMapper::map($array["creators"])); // TODO : mapper for array of objects;
		$obj->setNext($array["next"]);
		$obj->setPrevious($array["previous"]);
		return $obj;
	}
}