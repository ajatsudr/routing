<?php

namespace Modules\Http;

class Request {
	
    private $model;
    private $view;
    private $controller;
	
    private $url;
    private $router;

    public function __construct() {
		
        $this->url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $this->url = rtrim($this->url, '/');
        $this->url = explode('/', $this->url);
		
		$this->router = new \Modules\Http\Router();
		$this->router->find($this->url[0]);

        $this->model = $this->router->getModel();
        $this->view = $this->router->getView();
        $this->controller = $this->router->getController();
		
        if(isset($this->url[1])) {
			if(method_exists($this->controller, $this->url[1])) {
				if(isset($this->url[2]) && isset($this->url[3])){
					$this->model = $this->controller->{$this->url[1]}($this->model, $this->url[2], $this->url[3]);
				}elseif( isset($this->url[2]) && !isset($this->url[3])){
					$this->model = $this->controller->{$this->url[1]}($this->model, $this->url[2]);
				}elseif(!isset($this->url[2]) && !isset($this->url[3])){
					$this->model = $this->controller->{$this->url[1]}($this->model);
				}
			}
    	}
		
        $this->view->output($this->model);
    }
}