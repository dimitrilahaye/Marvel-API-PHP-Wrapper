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
		$obj->setComics(
			array_map(function($o) {
				return ComicsMapper::map($o);
			}, $array["comics"])); // TODO : mapper for array of objects
		$obj->setSeries(
			array_map(function($o) {
				return SeriesMapper::map($o);
			}, $array["series"])); // TODO : mapper for array of objects
		$obj->setEvents(
			array_map(function($o) {
				return EventsMapper::map($o);
			}, $array["events"])); // TODO : mapper for array of objects
		$obj->setCharacters(
			array_map(function($o) {
				return CharactersMapper::map($o);
			}, $array["characters"])); // TODO : mapper for array of objects
		$obj->setCreators(
			array_map(function($o) {
				return CreatorsMapper::map($o);
			}, $array["creators"])); // TODO : mapper for array of objects
		$obj->setOriginalissue($array["originalissue"])
		return $obj;
	}
}