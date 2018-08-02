<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Url;

abstract class UrlMapper
{
	static public function map(array $array)
	{
		$obj = new Url();
		$obj->setType($array["type"]);
		$obj->setUrl($array["url"]);
		return $obj;
	}
}