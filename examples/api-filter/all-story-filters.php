<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter as Filter;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// get Stories API
$storiesApi = MarvelApi::getStories();
// set its filters
$storiesFilters = $storiesApi->filter()
					->limit(1)
					->offset(0)
					->orderBy(Filter\StoriesFilter::ORDERBY_ID_ASC)
					->modifiedSince("01/01/1950");
// launch search with filters
$response = $storiesApi->snikt($storiesFilters);
// manage the array of stories from Marvel API
$filteredStories = $response->getData()->getResults();