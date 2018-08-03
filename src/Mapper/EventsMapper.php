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
		}, $array["urls"]));
		$obj->setComics(ComicsListMapper::map($array["comics"]));
		$obj->setStories(StoriesListMapper::map($array["stories"]));
		$obj->setSeries(SeriesListMapper::map($array["series"]));
		$obj->setCharacters(CharactersListMapper::map($array["characters"]));
		$obj->setCreators(CreatorsListMapper::map($array["creators"]));
		$obj->setNext(EventsSummaryMapper::map($array["next"]));
		$obj->setPrevious(EventsSummaryMapper::map($array["previous"]));
		return $obj;
	}
}