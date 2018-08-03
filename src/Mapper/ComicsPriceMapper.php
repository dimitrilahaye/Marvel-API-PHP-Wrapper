<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsPrice;

abstract class ComicsPriceMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new ComicsPrice();
		$obj->setType($array["type"]);
		$obj->setPrice($array["price"]);
		return $obj;
	}
}