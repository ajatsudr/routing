<?php

namespace Modules\Http;

class Router {
	
	private $table = array();
    private $route;

    public function __construct() {
        $this->table['home'] = new \Modules\Http\Route('HomeModel', 'HomeController', 'HomeView');
        $this->table['error'] = new \Modules\Http\Route('ErrorModel', 'ErrorController', 'ErrorView');
    }
	
    public function find($route) {
		
		$route = strtolower($route);
	
        if(array_key_exists($route, $this->table)){
            $this->route = $this->table[$route];
        }else{
            $this->route = $this->table['error'];
        }
    }

    public function getModel() {	
        if ( file_exists('Modules/Model/' . $this->route->model . '.php')){
            require_once 'Modules/Model/' . $this->route->model . '.php';

            $className = '\\Modules\\Model\\' . $this->route->model;

            return new $className;
        }
    }
	
	public function getController() {
        if ( file_exists('Modules/Controller/' . $this->route->controller . '.php')){
            require_once 'Modules/Controller/' . $this->route->controller . '.php';

            $className = '\\Modules\\Controller\\' . $this->route->controller;

            return new $className;
        }
    }

    public function getView() {
        if ( file_exists('Modules/View/' . $this->route->view . '.php')){
            require_once 'Modules/View/' . $this->route->view . '.php';

            $className = '\\Modules\\View\\'.$this->route->view;

            return new $className;
        }
    }
}
