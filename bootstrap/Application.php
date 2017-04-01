<?php

class Application
{
	protected $basePath = null;
	protected $appPath = null;
	protected $controllerPath = null;
	protected $modelPath = null;
	protected $functionPath = null;
	protected $viewPath = null;
	public $request = null;

	public function __construct()
	{
		$this->registerPaths();
		$this->registerLoader();
		$this->registerErrorHandler();
		$this->registerExceptionHandler();
		if($file = $this->helperExists('globals')) {
			$this->loadHelper($file);
		}
	}

	protected function registerPaths()
	{
		foreach (['Base', 'App', 'Controller', 'Model', 'Function', 'View'] as $path) {
			$method = "set{$path}Path";
			$this->$method();
		}
	}

	protected function registerLoader()
	{
		spl_autoload_register(function($className) {
			if(strpos($className, 'Controller') !== false) {
				if(file_exists($class = $this->controllerPath.$className.'.php')) {
					return require $class;
				}
			}

			$ds = DIRECTORY_SEPARATOR;
        	$dir = realpath(__DIR__.'/../');
	        $className = str_replace('\\', $ds, $className);
	        $file = "{$dir}{$ds}{$className}.php";
	        if (file_exists($file)) {
	        	return require $file;
	        }

			// if(file_exists($class = $this->modelPath.ucfirst($className).'.php')) {
			// 	return require $class;
			// }
		});
	}

	protected function registerErrorHandler()
	{
		set_error_handler(function($errno, $errstr) {
			var_dump(func_get_args()); exit;
		});
	}

	protected function registerExceptionHandler()
	{
		set_exception_handler(function($exception) {
			$code = $exception->getCode();
			$file = $this->getAppPath().'exceptions/'.$code.'.php';
			if(file_exists($file)) {
				header("{$_SERVER['SERVER_PROTOCOL']} $code");
				return require $file;
			}
			echo "<pre>";
			print_r($exception); exit($code);
		});
	}

	public function setBasePath()
	{
		$this->basePath = realpath(__DIR__.'/..');
	}

	public function getBasePath()
	{
		return $this->basePath;
	}

	public function setAppPath()
	{
		$this->appPath = $this->getBasePath().'/app/';
	}

	public function getAppPath()
	{
		return $this->appPath;
	}

	public function setControllerPath()
	{
		$this->controllerPath = $this->appPath.'controllers/';
	}

	public function getControllerPath()
	{
		return $this->controllerPath;
	}

	public function setModelPath()
	{
		$this->modelPath = $this->appPath.'models/';
	}

	public function getModelPath()
	{
		return $this->modelPath;
	}

	public function setFunctionPath()
	{
		$this->functionPath = $this->getAppPath().'helpers/';
	}

	public function getFunctionPath()
	{
		return $this->functionPath;
	}

	public function setViewPath()
	{
		$this->viewPath = $this->getAppPath().'views/';
	}

	public function getViewPath()
	{
		return $this->viewPath;
	}

	public function url($path = '', $params = [])
	{
		$cleanPath = trim($path, '/');
		$url = $this->request->getScheme().'://';
		$url.= $this->request->getDomain().'/'.$cleanPath;
		$params = is_array($params) ? $params : [$params];
		$url.= '/' . implode('/', $params);
		return trim($url, '/');
	}

	public function helperExists($fileName)
	{
		$file = $this->getFunctionPath().$fileName.'.php';
		if(file_exists($file)) {
			return $fileName;
		}
	}

	public function loadHelper($helperName)
	{
		require $this->getFunctionPath().$helperName.'.php';
	}

	public function loadView($viewName, $data = [])
	{
		$viewPath = $this->getViewPath().$viewName.'.php';
		if(file_exists($viewPath)) {
			extract($data);
			require $viewPath;
		}
		else {
			exit('View Not Found.');
		}
	}

	public function handle(Request $request)
	{
		ob_start();
		$this->request = $request;
		list($controller, $function, $params) = $this->getAction($request->getUri());
		$className = ucfirst($controller).'Controller';
		$instance = new $className($this);
		if(method_exists($instance, $function)) {
			return $this->response(
				call_user_func_array([$instance, $function], $params)
			);
		}
		throw new Exception("Http Not Found.", 404);
	}

	public function getAction($uri)
	{
		$uri = explode('/', trim($uri, '/'));
		$uri = array_filter($uri);
		$controller = !count($uri) ? 'home' : array_shift($uri);
		$function = count($uri) ? array_shift($uri) : 'index';
		return [$controller, $function, $uri];
	}

	public function response($data, $code = 200)
	{
		$data = is_array($data) ? json_encode($data) : $data;
		header("{$_SERVER['SERVER_PROTOCOL']} $code");
		// if($this->request->isJson($data)) {
		// 	var_dump($this->request->isJson($data));exit;
		// 	header('Content-Type: application/json');
		// }
		echo $data;
		ob_end_flush();
	}

	public function redirect($url, $replace = true, $code = 302)
	{
		header('Location:'.$this->url($url), $replace, $code);
		exit(0);
	}
}

return new Application;
