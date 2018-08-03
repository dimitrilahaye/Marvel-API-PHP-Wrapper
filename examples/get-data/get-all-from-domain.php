<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// Get first 20 Characters from Marvel API (default API's limit)
$response = MarvelApi::getCharacters()->snikt();
$allCharacters = $response->getData()->getResults();

// Get first 20 Comics from Marvel API (default API's limit)
$response = MarvelApi::getComics()->snikt();
$allComics = $response->getData()->getResults();

// Get first 20 Creators from Marvel API (default API's limit)
$response = MarvelApi::getCreators()->snikt();
$allCreators = $response->getData()->getResults();

// Get first 20 Events from Marvel API (default API's limit)
$response = MarvelApi::getEvents()->snikt();
$allEvents = $response->getData()->getResults();

// Get first 20 Series from Marvel API (default API's limit)
$response = MarvelApi::getSeries()->snikt();
$allSeries = $response->getData()->getResults();

// Get first 20 Stories from Marvel API (default API's limit)
$response = MarvelApi::getStories()->snikt();
$allStories = $response->getData()->getResults();