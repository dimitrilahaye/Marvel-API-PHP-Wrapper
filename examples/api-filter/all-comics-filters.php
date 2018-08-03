<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter as Filter;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// get Comics API
$comicsApi = MarvelApi::getComics();
// set its filters
$comicsFilters = $comicsApi->filter()
					->limit(1)
					->offset(0)
					->orderBy(Filter\ComicsFilter::ORDERBY_FOCDATE_ASC)
					->modifiedSince("01/01/1950")
					->format(Filter\ComicsFilter::FORMAT_COMIC)
					->formatType(Filter\ComicsFilter::FORMATTYPE_COMIC)
					->noVariants(true)
					->startYear("2000")
					->dateDescriptor(Filter\ComicsFilter::DATEDESCRIPTOR_LASTWEEK)
					->dateRange(array("01/01/1950","01/01/2010"))
					->hasDigitalIssue(false);
// launch search with filters
$response = $comicsApi->snikt($comicsFilters);
// manage the array of comics from Marvel API
$filteredComics = $response->getData()->getResults();