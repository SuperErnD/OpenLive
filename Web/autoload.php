<?php
$phpversion = (float)phpversion();

// CORE
if ($phpversion < 8.0 && $phpversion >= 7.0){
	require __DIR__ . "/core/php7.php";
}
require __DIR__ . "/core/router.php";
require __DIR__ . "/core/db.php";


// CONTROLLERS
require __DIR__ . "/controllers/BaseController.php";
require __DIR__ . "/controllers/MainController.php";
require __DIR__ . "/controllers/AccountController.php";

// API
require __DIR__ . "/controllers/APIAccountController.php";

// MODELS
require __DIR__ . "/models/BaseModel.php";
require __DIR__ . "/models/APIAccountModel.php";

//  лан, обойдемся так
