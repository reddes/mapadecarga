<?php
define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('CONTROLLER', $_GET['controller']);

require_once(ROOT . DS . 'autoload.php');

use Controllers\AppController;

$app = new AppController();

$app->template();

?>