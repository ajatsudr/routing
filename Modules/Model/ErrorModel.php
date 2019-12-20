<?php

namespace Modules\Model;

class ErrorModel {
	
	private $database;
	
	public function __construct() {
		$this->database = new \Modules\Library\Database();
	}
	
	public function sampletransaction() {
		
		try {  
		
			$this->dtabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$this->database->beginTransaction();
			$this->database->exec("insert into staff (id, first, last) values (23, 'Joe', 'Bloggs')");
			$this->database->exec("insert into salarychange (id, amount, changedate) 
			  values (23, 50000, NOW())");
			$dbh->commit();
		  
		} catch (Exception $e) {
			$this->database->rollBack();
			echo $e->getMessage();
		}
		
		
	}
}