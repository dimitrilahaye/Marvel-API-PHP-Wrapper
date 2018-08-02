<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\DataWrapper;

abstract class DataWrapperMapper
{
	static public function map(array $array)
	{
		$obj = new DataWrapper();
		$obj->setCode($array["code"]);
		$obj->setStatus($array["status"]);
		$obj->setCopyright($array["copyright"]);
		$obj->setAttributionText($array["attributionText"]);
		$obj->setAttributionHTML($array["attributionHTML"]);
		$obj->setData($array["data"]);
		$obj->setEtag($array["etag"]);
		return $obj;
	}
}