<?php

// php -S 127.0.0.1:8000 -t .

require_once 'vendor/autoload.php';

use DimitriLahaye\MarvelApi;

$api = new MarvelApi(array(
	"public" => "64293ea66bf51961b2fd42010dadeeb8",
	"private" => "900c09118ce492df2b78a8d1c35a7af8d47e60bc"
));

/*
https://developer.marvel.com/docs#!/public/getCreatorCollection_get_0
TODO : revoir chaque entité et les filtres possibles !
TODO : wrapper les data dans des objets !
*/

// $response = $api->getComics(183)->excelsior();
// $response = $api->getComics(183)->characters()->excelsior();
// $response = $api->getSeries(18454)->excelsior();
// $response = $api->getSeries(18454)->stories()->excelsior();
// $response = $api->getCreators(13568)->excelsior();
// $response = $api->getCreators(13569)->events()->excelsior();
// $response = $api->getStories(7)->excelsior();
// $response = $api->getStories(7)->series()->excelsior();
$response = $api->getCharacters(1011334)->excelsior();
// $response = $api->getCharacters()->excelsior();
// $response = $api->getCharacters(1011334)->comics()->excelsior();
// $response = $api->getEvents(116)->excelsior();
// $response = $api->getEvents(116)->creators()->excelsior();
if (!$response->isSuccess()) {
	echo $response->getStatus() . " : " . $response->getError(); . "<br/>";
} else {
	echo "<pre>" . json_encode($response->getData()["data"], JSON_PRETTY_PRINT) . "</pre><br/>";
}