<?php

// Project constants
define('PROJECT_NAME', 'Blog');
define('DEFAULT_CONTROLLER', 'posts');
define('DEBUG', false);

// Load app
require 'system/classes/Application.php';
$app = new Application;
