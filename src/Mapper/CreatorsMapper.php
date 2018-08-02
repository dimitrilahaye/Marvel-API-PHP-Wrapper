<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Creators;

abstract class CreatorsMapper
{
	static public function map(array $array)
	{
		$obj = new Creators();
		$obj->setId($array["id"]);
		$obj->setFirstName($array["firstName"]);
		$obj->setMiddleName($array["middleName"]);
		$obj->setLastName($array["lastName"]);
		$obj->setSuffix($array["suffix"]);
		$obj->setFullName($array["fullName"]);
		$obj->setModified($array["modified"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setThumbnail(ImageMapper::map($array["thumbnail"]));
		$obj->setUrls(array_map(function($o) {
			return UrlMapper::map($o);
		}, $array["urls"])); 
		var_dump($array["series"]);
		$obj->setSeries(array_walk($array["series"], function($k, $v) {
			var_dump($k);
			var_dump($v);
			return SeriesMapper::map($o);
		}));
		$obj->setStories(array_map(function($o) {
			return StoriesMapper::map($o);
		}, $array["stories"]));
		$obj->setComics(array_map(function($o) {
			return ComicsMapper::map($o);
		}, $array["comics"]));
		$obj->setEvents(array_map(function($o) {
			return EventsMapper::map($o);
		}, $array["events"]));
		return $obj;
	}
}