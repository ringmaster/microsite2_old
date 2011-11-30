<?php

namespace app\controllers;
use microsite\core\View;

class Index {

	function index() {
		$view = View::create();
		$view->fullpath = \microsite\core\Application::get_path();
		echo $view->render('index');
	}

	function hello($route) {
		$view = View::create();
		$view->name = isset($route->params['name']) ? $route->params['name'] : 'World';
		echo $view->render('hello');
	}

}
