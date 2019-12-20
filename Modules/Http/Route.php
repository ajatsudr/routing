<?php

namespace Modules\Http;

class Route {
	
	public $model;
	public $controller;
	public $view;
	
	public function __construct($model, $controller, $view) {
		$this->model = $model;
		$this->controller = $controller;
		$this->view = $view;
	}
}