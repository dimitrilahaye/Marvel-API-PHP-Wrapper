<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Stories;

abstract class StoriesMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new Stories();
		$obj->setId($array["id"]);
		$obj->setTitle($array["title"]);
		$obj->setDescription($array["description"]);
		$obj->setResourceURI($array["resourceURI"]);
		$obj->setType($array["type"]);
		$obj->setModified($array["modified"]);
		$obj->setThumbnail($array["thumbnail"]);
		$obj->setComics(ComicsListMapper::map($array["comics"]));
		$obj->setSeries(SeriesListMapper::map($array["series"]));
		$obj->setEvents(EventsListMapper::map($array["events"]));
		$obj->setCharacters(CharactersListMapper::map($array["characters"]));
		$obj->setCreators(CreatorsListMapper::map($array["creators"]));
		$obj->setOriginalissue(ComicsSummaryMapper::map($array["originalIssue"]));
		return $obj;
	}
}