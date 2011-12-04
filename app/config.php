<?php

namespace app;

use \microsite\core\Config;
use \microsite\core\RegexRoute;

Config::load(array(
	'routes' => array(
		new RegexRoute('app\controllers\Index', 'hello', '#^hello(?:/(?P<name>.+))?#'),
		new RegexRoute('app\controllers\Index', 'index', '#.*#'),
	),
));
