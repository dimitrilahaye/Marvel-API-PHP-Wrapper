<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\Image;

abstract class ImageMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new Image();
		$obj->setPath($array["path"]);
		$obj->setExtension($array["extension"]);
		return $obj;
	}
}