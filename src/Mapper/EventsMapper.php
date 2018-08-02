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
		$obj->setModified($array["modified"]);
		$obj->setStart($array["start"]);
		$obj->setEnd($array["end"]);
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); // TODO : mapper for array of objects
		$obj->setComics(array_map(function($o) {
			return ComicsMapper::map($o);
		}, $array["comics"])); // TODO : mapper for array of objects;
		$obj->setStories(array_map(function($o) {
			return StoriesMapper::map($o);
		}, $array["stories"])); // TODO : mapper for array of objects;
		$obj->setSeries(array_map(function($o) {
			return SeriesMapper::map($o);
		}, $array["series"])); // TODO : mapper for array of objects;
		$obj->setCharacters(array_map(function($o) {
			return CharactersMapper::map($o);
		}, $array["characters"])); // TODO : mapper for array of objects;
		$obj->setCreators(array_map(function($o) {
			return CreatorsMapper::map($o);
		}, $array["creators"])); // TODO : mapper for array of objects;
		$obj->setNext($array["next"]);
		$obj->setPrevious($array["previous"]);
		return $obj;
	}
}