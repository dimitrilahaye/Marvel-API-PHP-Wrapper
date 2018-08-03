<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Url;

abstract class UrlMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new Url();
		$obj->setType($array["type"]);
		$obj->setUrl($array["url"]);
		return $obj;
	}
}