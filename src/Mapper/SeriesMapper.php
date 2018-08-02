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
		$obj->setStartYear($array["startYear"]);
		$obj->setEndYear($array["endYear"]);
		$obj->setRating($array["rating"]);
		$obj->setModified($array["modified"]);
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); 
		$obj->setComics(array_map(function($o) {
			return ComicsMapper::map($o);
		}, $array["comics"]));
		$obj->setStories(array_map(function($o) {
			return StoriesMapper::map($o);
		}, $array["stories"]));
		$obj->setEvents(array_map(function($o) {
			return EventsMapper::map($o);
		}, $array["events"]));
		$obj->setCharacters(array_map(function($o) {
			return CharactersMapper::map($o);
		}, $array["characters"]));
		$obj->setCreators(array_map(function($o) {
			return CreatorsMapper::map($o);
		}, $array["creators"]));
		$obj->setNext($array["next"]);
		$obj->setPrevious($array["previous"]);
		return $obj;
	}
}