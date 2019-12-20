<?php

namespace Modules\Library;

class Database extends \PDO {
	
	public function __construct($options = null) {
		try{
			parent::__construct('mysql:host=localhost;port=3306;dbname=ajatsudr_blog', 'root', 'sa123', $options);
		}catch(PDOException $ex){
			die($ex->getMessage());
		}
	}
}