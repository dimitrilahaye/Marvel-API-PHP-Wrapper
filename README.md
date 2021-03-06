
  
# Marvel API PHP Wrapper  
  
Ask the Marvel API for any information you need, and then unleash your adamantium claws!  
  
[See Marvel API details here !](https://developer.marvel.com)

> This wrapper respects strictly the Marvel API naming standards, for attributes, etc..
  
### Project initialization  

```bash  
git clone...  
composer install  
```  
  
### Launch a PHP Server  

```bash  
php -S 127.0.0.1:8000 -t .  
```  
  
### Get started  

```php  
<?php  
require_once 'vendor/autoload.php';  
  
use DimitriLahaye\MarvelApi;  
  
MarvelApi::config(array(  
   "public" => "pubKey",  
   "private" => "privKey",
   /* values setted by default
   "scheme" => "https",
   "host" => "gateway.marvel.com",
   "port" => 443,
   "version" => "v1"
   */
));

// start using the MarvelApi singleton there..  
```  
  
  
### Get all the comics from Marvel API  

```php  
<?php  
//...  
 
$response = MarvelApi::getComics()->snikt();  
// get the array of DimitriLahaye\Model\Comics instances
$allComics = $response->getData()->getResults();
// access getters for each instance
$firstComicsId = $response->getData()->getResults()[0]->getId();
```  
  
### Pretty-print your data for debug purpose

```php  
<?php  
//...  
 
$response = MarvelApi::getComics()->snikt(); 
$response->successToString(); // will echo inside '<pre>' tags an highlighted 'var_export' of the data
```  
  
### Get one specific comics 
 
```php  
<?php  

//...   
$response = MarvelApi::getComics(183)->snikt();  
```  
  
### Get all the characters from a specific comics 
 
```php  
<?php  

//...
$response = MarvelApi::getComics(183)->characters()->snikt();
```  
  
### Add filters to query  

```php  
<?php  
use DimitriLahaye\MarvelApi;  
use DimitriLahaye\Filter\SeriesFilter;
  
//...

$seriesApi = MarvelApi::getSeries();
// There, you will have access to the specific series filters
$seriesFilter = $seriesApi->filter()
                          ->limit(5)
                          ->orderBy(SeriesFilter::ORDERBY_TITLE_DESC)
                          ->seriesType(SeriesFilter::SERIESTYPE_ONGOING);
$response = $seriesApi->snikt($seriesFilter);

$creatorsApi = MarvelApi::getSeries(20293)->creators();
// And there, you will have access to the specific creators filters
$creatorsFilter = $creatorsApi->filter()
                              ->limit(5)
                              ->firstName("Marguerite");
$response = $creatorsApi->snikt($creatorsFilter);
```  

### Manage errors  

```php  
<?php
  
//...
$response = MarvelApi::getComics(183)->creators()->snikt();
if (!$response->isSuccess()) {  
  // all the following methods are available in case of failed request
   echo $response->failToString(); // "401 : InvalidCredentials. The passed API key is invalid."
   echo $response->getStatus() // "401" (also available in successful call).
   echo $response->getMessage() // "InvalidCredentials. The passed API key is invalid." => error message from Marvel API. 
   echo $response->getError() // "Could not resolve host: cakeway.marvel.com" => error message from cURL.
   throw $response->getException(); // will throw an instance of Exception with status, message from API and message from cURL.
}  
```

### API examples

There are a lot of examples in ```./examples``` directory.
To test them, just add your public and private keys into ```./credentials.php``` file.