<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter as Filter;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// get Characters API
$charactersApi = MarvelApi::getCharacters();
// set its filters
$charactersFilters = $charactersApi->filter()
						->limit(1)
						->offset(0)
						->orderBy(Filter\CharactersFilter::ORDERBY_NAME_ASC)
						->modifiedSince("01/01/1950")
						->nameStartsWith("S");
// launch search with filters
$response = $charactersApi->snikt($charactersFilters);
// manage the array of characters from Marvel API
$filteredCharacters = $response->getData()->getResults();