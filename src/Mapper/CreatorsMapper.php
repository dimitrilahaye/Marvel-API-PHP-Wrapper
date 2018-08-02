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
		$obj->setUrls($array["urls"]);
		$obj->setThumbnail($array["thumbnail"]);
		$obj->setSeries($array["series"]);
		$obj->setStories($array["stories"]);
		$obj->setComics($array["comics"]);
		$obj->setEvents($array["events"]);
		return $obj;
	}
}