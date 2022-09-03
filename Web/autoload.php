<?php

// CORE
require __DIR__ . "/core/router.php";
require __DIR__ . "/core/db.php";


// CONTROLLERS
require __DIR__ . "/controllers/BaseController.php";
require __DIR__ . "/controllers/MainController.php";
require __DIR__ . "/controllers/AccountController.php";

// API
require __DIR__ . "/controllers/APIAccountController.php";

//  лан, обойдемся так