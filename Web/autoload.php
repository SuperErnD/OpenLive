<?php
$phpversion = (float)phpversion();

// CORE
require __DIR__ . "/core/router.php";
require __DIR__ . "/core/db.php";
if ($phpversion < 8.0 && $phpversion >= 6.0){
	require __DIR__ . "/core/php7.php";
}

// CONTROLLERS
require __DIR__ . "/controllers/BaseController.php";
require __DIR__ . "/controllers/MainController.php";
require __DIR__ . "/controllers/AccountController.php";

// API
require __DIR__ . "/controllers/APIAccountController.php";

//  лан, обойдемся так
