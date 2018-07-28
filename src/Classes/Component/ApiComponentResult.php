<?php

namespace DimitriLahaye\Component;

/**
* ApiComponent returns an instance of this class.
* We can check if response is on error or success.
* We can return an Exception (in case of failed request)
* We can have a toString version of this instance (to log for example)
* Class ApiComponentResult
* @package DimitriLahaye\Component
*/
class ApiComponentResult
{
	/**
	* Returned value in case of success
	* @var mixed|string
	*/
	private $_data;
	/**
	* Response status code
	* @var mixed
	*/
	private $_status;
	/**
	* Error message from cURL.
	* @var string
	*/
	private $_error;
	/**
	* Error message from Marvel API.
	* @var string
	*/
	private $_message;

	/**
	* ApiComponentResult constructor.
	* @param $curl
	*/
	public function __construct($curl)
	{
		# get cURL response
		$result = curl_exec($curl);
		# set status and error message if exists
		$this->_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$this->_error = curl_error($curl);
		# manage data and message depending of the status
		if ($this->_status >= 200 && $this->_status < 300) {
			$result = json_decode($result, true);
			$this->_data = (sizeof($result) === 0) ? "SUCCESS" : $result;
		} else {
			$failedResult = json_decode($result, true);
			if (!is_null($failedResult)) {
				$this->_message = $failedResult["code"] . ".";
				if (array_key_exists("message", $failedResult)) {
					$this->_message .= " " . $failedResult["message"];
				}
				if (array_key_exists("status", $failedResult)) {
					$this->_message .= " " . $failedResult["status"];
				}
			} else {
				$this->_status = 500;
			}
		}
	}


	/**
	* Depending on the status, return true if result is a success. False if not.
	* @return bool
	*/
	public function isSuccess()
	{
		if ($this->_status < 200 || $this->_status >= 300) {
			return false;
		}
		return true;
	}

	/**
	* Returns an instance
	* @return \Exception
	*/
	public function getException()
	{
		return new \Exception($this->failToString() , $this->getStatus());
	}

	/**
	* Get this success result to string.
	* @return string
	*/
	public function successToString()
	{
		return json_encode($this->_data, JSON_PRETTY_PRINT);
	}

	/**
	* Get the failed result to string.
	* @return string
	*/
	public function failToString()
	{
		return $this->getStatus() . " : " . $this->getError() . " " . $this->getMessage();
	}

	/**
	* Get returned value in case of success.
	* @return mixed
	*/
	public function getData()
	{
		return $this->_data;
	}

	/**
	* Get status code.
	* @return mixed
	*/
	public function getStatus()
	{
		return $this->_status;
	}

	/**
	* Get the error message from cURL.
	* @return mixed
	*/
	public function getError()
	{
		return $this->_error;
	}

	/**
	* Get the error message from Marvel API.
	* @return mixed
	*/
	public function getMessage()
	{
		return $this->_message;
	}
}