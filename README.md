# Marvel API PHP Wrapper

Ask the Marvel API for any information you need, and then yell ***Excelsior***!

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

$response = $api->getComics()->excelsior();
echo "<pre>" . json_encode($response->getData()["data"], JSON_PRETTY_PRINT) . "</pre>";
```

### Get one specific comics
```php
<?php

//...

$response = $api->getComics(183)->excelsior();
echo "<pre>" . json_encode($response->getData()["data"], JSON_PRETTY_PRINT) . "</pre>";
```

### Get all the characters from a specific comics
```php
<?php

//...

$response = $api->getComics(183)->characters()->excelsior();
echo "<pre>" . json_encode($response->getData()["data"], JSON_PRETTY_PRINT) . "</pre>";
```

### Manage errors
```php
<?php

//...

$response = $api->getComics(183)->characters()->excelsior();
if (!$response->isSuccess()) {
	echo $response->getStatus() . " : " . $response->getError();
} else {
	echo "<pre>" . json_encode($response->getData()["data"], JSON_PRETTY_PRINT) . "</pre>";
}
```

### Throw a specific Exception
```php
<?php

//...

$response = $api->getComics(183)->characters()->excelsior();
if (!$response->isSuccess()) {
	throw $response->getException();
} else {
	echo "<pre>" . json_encode($response->getData()["data"], JSON_PRETTY_PRINT) . "</pre>";
}
```