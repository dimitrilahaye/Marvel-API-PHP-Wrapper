<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsDate;

abstract class ComicsDateMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new ComicsDate();
		$obj->setType($array["type"]);
		$obj->setDate($array["date"]);
		return $obj;
	}
}