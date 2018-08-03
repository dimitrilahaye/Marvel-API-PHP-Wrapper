<?php

require_once '../../vendor/autoload.php';
require_once '../../credentials.php';
  
use DimitriLahaye\MarvelApi;
  
MarvelApi::config(array(  
   "public" => PUBLIC_KEY,  
   "private" => PRIVATE_KEY
));

// Get first Character from Marvel API
$response = MarvelApi::getCharacters()->snikt();
$character = $response->getData()->getResults()[0];

// Get first Comic from Marvel API
$response = MarvelApi::getComics()->snikt();
$comic = $response->getData()->getResults()[0];

// Get first Creator from Marvel API
$response = MarvelApi::getCreators()->snikt();
$creator = $response->getData()->getResults()[0];

// Get first Event from Marvel API
$response = MarvelApi::getEvents()->snikt();
$event = $response->getData()->getResults()[0];

// Get first Serie from Marvel API
$response = MarvelApi::getSeries()->snikt();
$serie = $response->getData()->getResults()[0];

// Get first Story from Marvel API
$response = MarvelApi::getStories()->snikt();
$story = $response->getData()->getResults()[0];