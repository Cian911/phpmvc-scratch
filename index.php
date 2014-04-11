<?php

// Define our base dirctory path
define('BASE_PATH', dirname(realpath(__FILE__)));

require BASE_PATH . '/libs/Init.php';
require BASE_PATH . '/libs/Controller.php';
require BASE_PATH . '/libs/View.php';

$init = new Init();

?>