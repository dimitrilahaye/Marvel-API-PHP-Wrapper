<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter as Filter;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// get Creators API
$creatorsApi = MarvelApi::getCreators();
// set its filters
$creatorsFilters = $creatorsApi->filter()
						->limit(1)
						->offset(0)
						->orderBy(Filter\CreatorsFilter::ORDERBY_LASTNAME_ASC)
						->modifiedSince("01/01/1950")
						->firstNameStartsWith("S");
// launch search with filters
$response = $creatorsApi->snikt($creatorsFilters);
// manage the array of creators from Marvel API
$filteredCreators = $response->getData()->getResults();