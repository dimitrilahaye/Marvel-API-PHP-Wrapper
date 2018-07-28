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
	* @return ApiComponentResult
	* @throws ErrorException
	*/
	static public function get(string $url, array $body = array())
	{
		try {
			# init the cURL and catch error in case
			$curl = curl_init();
			if ($curl === false) {
				throw new ErrorException('Failed to initialize cURL');
			}
			# add body to request
			if (sizeof($body) > 0) {
				$url = sprintf("%s?%s", $url, http_build_query($body));
			}
			echo $url;
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
			$result = new ApiComponentResult($curl);
			# close the cURL
			curl_close($curl);

			return $result;
		} catch (\ErrorException $e) {
			throw $e;
		}
	}
}