<?php

namespace Modules\Library;

class Template {
	
	private $data = array();
	
    public function assign($key, $value) {
		$this->data[$key] = $value;
    }

	public function render($filename) {	
		if(count($this->data) > 0) {
			foreach ($this->data as $key => $value) {
                if (strlen($key) > 0) {
					${$key} = $value;
                }
            }
        }
        if(file_exists('Modules/View/Html/index.php')) {
            require_once 'Modules/View/Html/index.php';
        }
    }
}