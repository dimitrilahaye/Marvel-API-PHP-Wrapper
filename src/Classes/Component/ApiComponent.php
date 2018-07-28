<?php

namespace DimitriLahaye\Component;

/**
* Class ApiComponent
* @package DimitriLahaye\Component
*/
class ApiComponent
{
	/**
	* @param string $url
	* @param array $body
	* @param array $header
	* @return ApiComponentResult
	* @throws ErrorException
	*/
	static public function get(string $url, array $body = array(), array $header = array())
	{
		try {
			return ApiComponent::_call("GET", $url, $body, $header);
		} catch (\ErrorException $e) {
			throw $e;
		}
	}

	/**
	* @param string $method
	* @param string $url
	* @param array $body
	* @param array $header
	* @return ApiComponentResult
	* @throws ErrorException
	*/
	static private function _call(string $method, string $url, array $body = array(), array $header = array())
	{
		try {
			# init the curl and catch error in case
			$curl = curl_init();
			if ($curl === false) {
				throw new ErrorException('Failed to initialize curl');
			}
			# add body to request
			if (sizeof($body) > 0) {
				$url = sprintf("%s?%s", $url, http_build_query($body));
			}
			# add header
			if (sizeof($header) > 0) {
				curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
			}
			# finish setting the curl
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			# build the result object instance
			$result = new ApiComponentResult($curl);
			# close the curl
			curl_close($curl);

			return $result;
		} catch (ErrorException $e) {
			throw $e;
		}
	}
}