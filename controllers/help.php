<?php

class Help extends Controller
{
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->render('help/index');
	}

	function other($arg=false) {
		require_once 'models/help_model.php';

		$model = new Help_Model();
		$this->view->blah = $model->blah();
	}
}
?>
