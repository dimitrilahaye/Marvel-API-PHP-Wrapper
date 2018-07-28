<?php

namespace DimitriLahaye\Component;

/**
* ApiComponent returns an instance of this class.
* We can check if response is on error or success.
* We can return an instance of ApiComponentException class (in case of failed request)
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
	private $data;
	/**
	* Response status code
	* @var mixed
	*/
	private $status;
	/**
	* Error message from curl.
	* @var string
	*/
	private $error;

	/**
	* ApiComponentResult constructor.
	* @param $curl
	*/
	public function __construct($curl)
	{
		# get curl response
		$result = curl_exec($curl);
		# set status and error message if exists
		$this->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$this->error = curl_error($curl);
		# manage data and message depending of the status
		if ($this->status >= 200 && $this->status < 300) {
			$result = json_decode($result, true);
			$this->data = (sizeof($result) === 0) ? "SUCCESS" : $result;
		} else if ($this->status >= 400 && $this->status < 500) {
			//...
		} else if ($this->status >= 500) {
			//...
		}
		else {
			# sometimes, server sends status lower than 200. So we manually put it at 500
			//...
			$this->status = 500;
		}
	}


	/**
	* Depending on the status, return true if result is a success. False if not.
	* @return bool
	*/
	public function isSuccess()
	{
		if ($this->status < 200 || $this->status >= 300) {
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
		return new \Exception($this->getError() , $this->getStatus());
	}

	/**
	* Get this instance to string.
	* @return string
	*/
	public function toString()
	{
		$data = json_encode($this->data, true);
		$string = "status : {$this->status} || data: {$data}";
		if (!$this->isSuccess()) {
			$string .= " || error: {$this->error}";
		}
		return $string;
	}

	/**
	* Get returned value in case of success.
	* @return mixed
	*/
	public function getData()
	{
		return $this->data;
	}

	/**
	* Get status code.
	* @return mixed
	*/
	public function getStatus()
	{
		return $this->status;
	}

	/**
	* Get the error message from curl.
	* @return mixed
	*/
	public function getError()
	{
		return $this->error;
	}
}