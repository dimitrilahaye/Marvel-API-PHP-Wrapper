<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Creators;

abstract class CreatorsMapper
{
	static public function map($array = array())
	{
		// var_dump($array);
		if (sizeof($array) === 0) {
			return null;
		}
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
		// echo '<pre>' . var_export($array["series"], true) . '</pre>';
		$obj->setSeries(SeriesListMapper::map($array["series"]));
		$obj->setStories(StoriesListMapper::map($array["stories"]));
		$obj->setComics(ComicsListMapper::map($array["comics"]));
		$obj->setEvents(EventsListMapper::map($array["events"]));
		return $obj;
	}
}