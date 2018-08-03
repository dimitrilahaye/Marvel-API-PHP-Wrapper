<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter as Filter;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// get Events API
$eventsApi = MarvelApi::getEvents();
// set its filters
$eventsFilters = $eventsApi->filter()
					->limit(1)
					->offset(0)
					->orderBy(Filter\EventsFilter::ORDERBY_NAME_ASC)
					->modifiedSince("01/01/1950");
// launch search with filters
$response = $eventsApi->snikt($eventsFilters);
// manage the array of events from Marvel API
$filteredEvents = $response->getData()->getResults();