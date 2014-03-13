<?php

class Database extends PDO
{
	function __construct() {
		parent::__construct('mysql:host=localhost;dbname=test', 'root', '');
		// config/database.php
		//parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
	}
}
?>
