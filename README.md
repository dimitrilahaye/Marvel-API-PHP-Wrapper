# Marvel API PHP Wrapper

Ask the Marvel API for any information you need, and then unleash your adamantium claws!

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
$data = $res->getData()["data"];
```

### Pretty-print your data for debug purpose.
```php
<?php
//...
$response = $api->getComics()->snikt();
echo "<pre>" . $res->successToString() . "</pre>";
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
```php
<?php
use DimitriLahaye\MarvelApi;
use DimitriLahaye\Filter\SeriesFilter;
//...
// Class MarvelApi returns you a specific instance of Filter depending on your current namespace.
// Specific Filter instance for characters, comics, events, etc.
$response = $api->getSeries()->snikt(
	$api->filter()
		->limit(5)
		->orderBy(SeriesFilter::ORDERBY_TITLE_DESC)
		->seriesType(SeriesFilter::SERIESTYPE_ONGOING)
);
```

### Manage errors
```php
<?php
//...
$response = $api->getComics(183)->characters()->snikt();
if (!$response->isSuccess()) {
	echo $res->failToString(); // "401 : InvalidCredentials. The passed API key is invalid."
	echo $response->getStatus() // "401" (also available in successful call).
	echo $response->getMessage() // "InvalidCredentials. The passed API key is invalid." => error message from Marvel API.
	echo $response->getError() // "Resource not found" => error message from cURL.
}
```

### Throw a specific Exception
```php
<?php
//...
$response = $api->getComics(183)->characters()->snikt();
if (!$response->isSuccess()) {
	throw $response->getException(); // will throw an instance of Exception with status, message from API and message from cURL.
}
```