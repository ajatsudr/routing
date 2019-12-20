<?php

namespace Modules\Controller;

class HomeController {
	
	public function test(\Modules\Model\HomeModel $model, $param1, $param2): \Modules\Model\HomeModel {
		// process
		return $model;
	}
}