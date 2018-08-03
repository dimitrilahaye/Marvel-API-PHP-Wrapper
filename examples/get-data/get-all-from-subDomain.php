<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// Get first 20 Comics associated with character named '3-D Man' from Marvel API (default API's limit)
$response = MarvelApi::getCharacters(1011334)->comics()->snikt();
$comicsData = $response->getData()->getResults();

// Get first 20 Characters associated with comics titled 'Ultimate X-Men (Spanish Language Edition) (2000) #6' from Marvel API (default API's limit)
$response = MarvelApi::getComics(21483)->characters()->snikt();
$charactersData = $response->getData()->getResults();

// Get first 20 Comics associated with creator named 'Al Sjoerdsma' from Marvel API (default API's limit)
$response = MarvelApi::getCreators(7470)->comics()->snikt();
$comicsData = $response->getData()->getResults();

// Get first 20 Series associated with event titled 'Acts of Vengeance!' from Marvel API (default API's limit)
$response = MarvelApi::getEvents(116)->series()->snikt();
$seriesData = $response->getData()->getResults();

// Get first 20 Comics associated with series titled '1602 Witch Hunter Angela (2015)' from Marvel API (default API's limit)
$response = MarvelApi::getSeries(19244)->comics()->snikt();
$comicsData = $response->getData()->getResults();

// Get first 20 Creators associated with story titled '9 Ordinary New York City cop Frankie "Gunz" Gunzer[...]' from Marvel API (default API's limit)
$response = MarvelApi::getStories(9)->creators()->snikt();
$creatorsData = $response->getData()->getResults();