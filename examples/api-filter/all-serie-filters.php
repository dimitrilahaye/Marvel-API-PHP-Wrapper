<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter as Filter;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// get Series API
$seriesApi = MarvelApi::getSeries();
// set its filters
$seriesFilters = $seriesApi->filter()
					->limit(1)
					->offset(0)
					->orderBy(Filter\SeriesFilter::ORDERBY_TITLE_ASC)
					->modifiedSince("01/01/1950")
					->contains(Filter\SeriesFilter::CONTAINS_COMIC)
					->seriesType(Filter\SeriesFilter::SERIESTYPE_COLLECTION);
// launch search with filters
$response = $seriesApi->snikt($seriesFilters);
// manage the array of series from Marvel API
$filteredSeries = $response->getData()->getResults();