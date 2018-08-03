<?php

namespace DimitriLahaye\Mapper;

use DimitriLahaye\Model\DataWrapper;

abstract class CreatorsDataWrapperMapper
{
	static public function map($array = array())
	{
		if (sizeof($array) === 0) {
			return null;
		}
		$obj = new DataWrapper();
		$obj->setCode($array["code"]);
		$obj->setStatus($array["status"]);
		$obj->setCopyright($array["copyright"]);
		$obj->setAttributionText($array["attributionText"]);
		$obj->setAttributionHTML($array["attributionHTML"]);
		$obj->setData(CreatorsDataContainerMapper::map($array["data"]));
		$obj->setEtag($array["etag"]);
		return $obj;
	}
}