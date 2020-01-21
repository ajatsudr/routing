<?php 

class App{
	
	public $url = [];
	public $routes = [];
	
	public function __construct(){
		$this->url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $this->url = rtrim($this->url, '/');
        $this->url = explode('/', $this->url);
	}
	
	public function add($route, Closure $callback){
		$this->routes[$route] = $callback;
	}
	
	public function run(){
		if( array_key_exists($this->url[0], $this->routes)
		    && $this->routes[$this->url[0]] instanceof Closure
			&& is_callable($this->routes[$this->url[0]])){
			call_user_func($this->routes[$this->url[0]]);
		}
	}
}
