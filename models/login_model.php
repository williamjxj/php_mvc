<?php

class Login_Model extends Model
{
	function __construct() {
		parent::__construct();
	}

	public function run() {
		$user = trim($_POST['user']);
		$pass = $_POST['pass'];
		
		$sth = $this->db->prepare('select id from login where username=:login and password=:pass');

		$sth->execute(array(
			':login' => $user,
			':pass'=>$pass
		));

		if($sth->rowCount()>0) {
			Session::init();
			Session::set('loggedIn', true);
			//$data = $sth->fetchAll();
			header('Location: ../dashboard');
		}
		else {
			header('location: ../login');
		}
	}

}

