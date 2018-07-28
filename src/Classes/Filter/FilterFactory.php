<?php

namespace DimitriLahaye\Filter;

class FilterFactory
{
	/**
	 * Singleton instance of the class FilterFactory
	 * @var FilterFactory
	 */
	static private $_instance;
	/**
	 * Associative array providing the right Filter child instance depending on the given namespace.
	 * @var array
	 */
	static private $_container;

	/*
	 * Providing Singleton integrity
	 */
	protected function __contruct(){}
	private function __clone(){}
	private function __wakeup(){}

	/*
	 * Return the right Filter child instance depending on the given $namespace.
	 * @param string $namespace
	 * @return Filter
	 */
	static public function get(string $namespace)
	{
		if (is_null(static::$_container)) {
			static::$_container = array(
				"characters" => CharactersFilter::class,
				"comics" => ComicsFilter::class,
				"creators" => CreatorsFilter::class,
				"events" => EventsFilter::class,
				"series" => SeriesFilter::class,
				"stories" => StoriesFilter::class
			);
		}
		if (is_null(static::$_instance)) {
			static::$_instance = new FilterFactory();
		}
		return new static::$_instance::$_container[$namespace]();
	}
}