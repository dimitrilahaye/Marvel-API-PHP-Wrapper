<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Series;

abstract class SeriesMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
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
		$obj->setComics(ComicsListMapper::map($array["comics"]));
		$obj->setStories(StoriesListMapper::map($array["stories"]));
		$obj->setEvents(EventsListMapper::map($array["events"]));
		$obj->setCharacters(CharactersListMapper::map($array["characters"]));
		$obj->setCreators(CreatorsListMapper::map($array["creators"]));
		$obj->setNext(SeriesSummaryMapper::map($array["next"]));
		$obj->setPrevious(SeriesSummaryMapper::map($array["previous"]));
		return $obj;
	}
}