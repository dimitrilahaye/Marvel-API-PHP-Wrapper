
# Marvel API PHP Wrapper

Ask the Marvel API for any information you need, and then unleash your adamantium claws!

[See Marvel API details here !](https://developer.marvel.com)

### Project initialization
```bash
git clone...
composer install
```

### Get started
```php
<?php
require_once 'vendor/autoload.php';

use DimitriLahaye\MarvelApi;

$api = new MarvelApi(array(
	"public" => "pubKey",
	"private" => "privKey"
));

// start using the MarvelApi instance there..
```

### Launch a PHP Server
```bash
php -S 127.0.0.1:8000 -t .
```

### Get all the comics from Marvel API
```php
<?php
//...
$response = $api->getComics()->snikt();
$data = $response->getData()["data"];
```

### Pretty-print your data for debug purpose.
```php
<?php
//...
$response = $api->getComics()->snikt();
echo "<pre>" . $response->successToString() . "</pre>";
```

### Get one specific comics
```php
<?php
//...
$response = $api->getComics(183)->snikt();
```

### Get all the characters from a specific comics
```php
<?php
//...
$response = $api->getComics(183)->characters()->snikt();
```

### Add filters to query
#### Transparent way
Let ```MarvelApi``` class manage the instanciation of the right ```Filter``` class via its ```FilterFactory```. So, it will return you a specific instance of ```Filter``` depending on your current namespace: ```CharactersFilter```, ```ComicsFilter```, ```EventsFilter```, etc..
```php
<?php
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter\SeriesFilter;
//...
$response = $api->getSeries()->snikt(
	$api->filter()
		->limit(5)
		->orderBy(SeriesFilter::ORDERBY_TITLE_DESC)
		->seriesType(SeriesFilter::SERIESTYPE_ONGOING)
);
```
#### Concrete way
Instanciate yourself the ```Filter``` you need, then inject it into the snikt method.
```php
<?php
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter\SeriesFilter;
//...
$filter = new SeriesFilter();
$filter->limit(5)
	->orderBy(SeriesFilter::ORDERBY_TITLE_DESC)
	->seriesType(SeriesFilter::SERIESTYPE_ONGOING);
$response = $api->getSeries()->snikt($filter);
```

### Manage errors
```php
<?php
//...
$response = $api->getComics(183)->characters()->snikt();
if (!$response->isSuccess()) {
	echo $response->failToString(); // "401 : InvalidCredentials. The passed API key is invalid."
	echo $response->getStatus() // "401" (also available in successful call).
	echo $response->getMessage() // "InvalidCredentials. The passed API key is invalid." => error message from Marvel API.
	echo $response->getError() // "Could not resolve host: cakeway.marvel.com" => error message from cURL.
	throw $response->getException(); // will throw an instance of Exception with status, message from API and message from cURL.
}
```
