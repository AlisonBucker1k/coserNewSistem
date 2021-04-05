<?php
class controller {

	protected $db;

	public function __construct() {
		global $config;
	}
	
	public function loadView($viewName, $viewData = array(), $viewType) {
		extract($viewData);
		include 'views/'.$viewType.'/'.$viewName.'.php';
	}

	public function loadTemplate($viewName,  $viewData = array(), $viewType='') {
		include 'views/'.$viewType.'/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData, $viewType) {
		extract($viewData);
		include 'views/'.$viewType.'/'.$viewName.'.php';
	}

}