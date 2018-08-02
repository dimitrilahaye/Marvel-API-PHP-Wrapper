<?php

namespace DimitriLahaye\Handler;

use DimitriLahaye\Filter\Filter;
use DimitriLahaye\Mapper\CharactersDataWrapperMapper;
use DimitriLahaye\Mapper\ComicsDataWrapperMapper;
use DimitriLahaye\Mapper\CreatorsDataWrapperMapper;
use DimitriLahaye\Mapper\EventsDataWrapperMapper;
use DimitriLahaye\Mapper\SeriesDataWrapperMapper;
use DimitriLahaye\Mapper\StoriesDataWrapperMapper;

/**
 * Class ApiCallHandler
 * @package DimitriLahaye\Handler
 * 
 * Class in charge of send request to the Marvel API servers, and manage the response (errors from cURL or API, and success)
 */
class ApiCallHandler
{

    /**
     * Your Marvel API public key
     * @var string
     */
    private $_public;
    /**
     * Your Marvel API private key
     * @var string
     */
    private $_private;
    /**
     * Url's scheme to call Marvel API
     * @var string
     */
    private $_scheme;
    /**
     * Host to call Marvel API
     * @var string
     */
    private $_host;
    /**
     * Port to call Marvel API
     * @var string
     */
    private $_port;
    /**
     * Version of the Marvel API we want to call
     * @var string
     */
    private $_version;
    /**
     * Built body for querying the Marvel API.
     * Will content the timestamp, public key and hashed key.
     * Could content queries from filtering. Example : '?limit=10&name=Spider-Man&offset=15'
     * @var array
     */
    private $_body = array();
    /**
     * String added during fluent class utilisation.
     * It corresponds with the namespace of the asked entity.
     * Example : 'comics'
     * @var string
     */
    private $_category;
    /**
     * String added during fluent class utilisation.
     * It corresponds with the sub-namespace of the asked entity.
     * Example : 'comics/1432/creators'
     * @var string
     */
    private $_subcategory;
    /**
     * Asked entity's id added during fluent class utilisation.
     * It corresponds with the id of the asked entity.
     * Example : 'comics/1432'
     * @var int
     */
    private $_id;

    /**
     * Constructor.
     * The configuration array must have "public" and "private" keys which corresponds to the public and private API key.
     * Optionnaly, it can have "scheme", "host", "port" and "version" keys to build a specific URL to request the Marvel API.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->_public = $config["public"];
        $this->_private = $config["private"];
        $this->_scheme = (array_key_exists("scheme", $config)) ? $config["scheme"] : "https";
        $this->_host = (array_key_exists("host", $config)) ? $config["host"] : "gateway.marvel.com";
        $this->_port = (array_key_exists("port", $config)) ? $config["port"] : 443;
        $this->_version = (array_key_exists("version", $config)) ? $config["version"] : "v1";
    }

    /**
     * Return a response from the Marvel API.
     * This method will build the url to call with the category, id, subcategory and filters setted earlier.
     * @param Filter $filter
     * @throws \Exception If a filter is passed in argument but its class doesn't match with the current namespace ($this->_category or $this->_subcategory), it throws an Exception.
     * Example: if you want to call '/public/creators' and try to use a SeriesFilter, it will throw an Exception.
     * Exception can also be throw if you call this method before any getter.
     * @return ApiCallResult
     */
    public function snikt(Filter $filter = null)
    {
        return $this->_get($this->_buildUrl($filter));
    }

    /**
     * Return a full url with queries body.
     * @param Filter $filter
     * @return string
     */
    private function _buildUrl(Filter $filter = null)
    {
        $path = $this->_category;
        if (!is_null($this->_id)) {
            $path .= "/" . $this->_id;
        }
        if (!is_null($this->_subcategory)) {
            $path .= "/" . $this->_subcategory;
        }
        if (!is_null($filter)) {
            $this->_body = array_merge($filter->getBody(), $this->_getBody());
        } else {
            $this->_body = $this->_getBody();
        }
        return "{$this->_scheme}://{$this->_host}:{$this->_port}/{$this->_version}/public/{$path}";
    }

    /*
     * Return the body of the request.
     * Contains a timestamp and an encrypted string containing the private and public API keys.
     * @return array
     */
    private function _getBody()
    {
        $timestamp = time();
        $hash = md5("{$timestamp}{$this->_private}{$this->_public}");
        return array(
            "ts" => $timestamp,
            "apikey" => $this->_public,
            "hash" => $hash
        );
    }

    /**
     * Return a response from the Marvel API.
     * @param string $url
     * @throws \ErrorException if cURL can not be init.
     * @throws \Exception
     * @return ApiCallResult
     */
	private function _get(string $url)
	{
		try {
			# init the cURL and catch error in case
			$curl = curl_init();
			if ($curl === false) {
				throw new \ErrorException('Failed to initialize cURL');
			}
			# add body to request
			if (sizeof($this->_body) > 0) {
				$url = sprintf("%s?%s", $url, http_build_query($this->_body));
			}
			//echo $url;
			# add header
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
				"Content-Type: application/json"
			));
			# finish setting the cURL
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			# build the result object instance
			$result = new ApiCallResult($curl);
            // echo "<pre>".$result->successToString()."</pre>";
			# close the cURL
			curl_close($curl);
            # map result
            $domain = (!is_null($this->_subcategory)) ? $this->_subcategory : $this->_category;
            $_data = $result->getData();
            switch ($domain) {
                case "characters":
                    $resolved_result = CharactersDataWrapperMapper::map($_data);
                    break;
                case "comics":
                    $resolved_result = ComicsDataWrapperMapper::map($_data);
                    break;
                case "creators":
                    $resolved_result = CreatorsDataWrapperMapper::map($_data);
                    break;
                case "events":
                    $resolved_result = EventsDataWrapperMapper::map($_data);
                    break;
                case "series":
                    $resolved_result = SeriesDataWrapperMapper::map($_data);
                    break;
                case "stories":
                    $resolved_result = StoriesDataWrapperMapper::map($_data);
                    break;
                default:
                    throw new \Exception("Unknown data.");
            }
            $this->_category = null;
            $this->_subcategory = null;
            $this->_id = null;
			return $resolved_result;
		} catch (\ErrorException $e) {
			throw $e;
		}
	}

    /**
     * @param string $category
     * @return ApiCallHandler
     */
    public function setCategory($category) {
        $this->_category = $category;
        return $this;
    }

    /**
     * @param string $subcategory
     * @return ApiCallHandler
     */
    public function setSubcategory($subcategory) {
        $this->_subcategory = $subcategory;
        return $this;
    }

    /**
     * @param int $id
     * @return ApiCallHandler
     */
    public function setId($id) {
        $this->_id = $id;
        return $this;
    }
}