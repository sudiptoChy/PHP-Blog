<?php

class Request
{
	protected $uri = null;
	protected $scheme = null;
	protected $domain = null;

	public function __construct()
	{
		$this->setUri($_SERVER);
		$this->setScheme($_SERVER);
		$this->setDomain($_SERVER);
	}

	public function setUri($server)
	{
		$uriParts = parse_url($_SERVER['REQUEST_URI']);
		$this->uri = $uriParts['path'];
	}

	public function getUri()
	{
		return $this->uri;
	}

	public function setScheme($server)
	{
		return $this->scheme = 'http';//$server['REQUEST_SCHEME'];
	}

	public function getScheme()
	{
		return $this->scheme;
	}

	public function setDomain($server)
	{
		return $this->domain = $server['HTTP_HOST'];
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function get($key)
	{
		if(isset($_GET[$key])) {
			return $_GET[$key];
		}
		return null;
	}

	public function post($key)
	{
		if(isset($_POST[$key])) {
			return $_POST[$key];
		}
		return null;
	}

	public function all()
	{
		return array_merge($_GET, $_POST);
	}

	public function isJson($data)
	{
		json_decode($data);
		return (json_last_error() == JSON_ERROR_NONE);
	}
}

return new Request;
