<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\TextObject;

abstract class TextObjectMapper
{
	static public function map(array $array)
	{
		$obj = new TextObject();
		$obj->setType($array["type"]);
		$obj->setLanguage($array["language"]);
		$obj->setText($array["text"]);
		return $obj;
	}
}