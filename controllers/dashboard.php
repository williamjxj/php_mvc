<?php

class Dashboard extends Controller
{
	function __construct() {
		parent::__construct();
		Session::init();
		if(Session::get('loggedIn')) {
		}
		else {
			Session::destroy();
			header('Location: ../login');
			exit;
		}
	}

	function logout() {
		Session::destroy();
		header('Location: ../login');
		exit;
	}

	function index() {
		$this->view->render('dashboard/index');
	}
}
?>
