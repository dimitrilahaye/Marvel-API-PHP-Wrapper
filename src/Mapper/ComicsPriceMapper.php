<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\ComicsPrice;

abstract class ComicsPriceMapper
{
	static public function map(array $array)
	{
		$obj = new ComicsPrice();
		$obj->setType($array["type"]);
		$obj->setPrice($array["price"]);
		return $obj;
	}
}