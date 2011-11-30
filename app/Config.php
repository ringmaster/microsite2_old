<?php

namespace app;

class Config extends \microsite\core\Config {

	public function get_routes() {
		die('ok');
		return array(
			'hello' => new RegexRoute('app\controllers\Index', 'hello', '#^hello(?:/(?P<name>.+))?#'),
//			'default' => new RegexRoute('app\controllers\Index', 'index', '#.*#'),
		);
	}

}
