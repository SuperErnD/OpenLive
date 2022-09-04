<?php
$phpversion = (float)phpversion();

// CORE
if ($phpversion < 8.0 && $phpversion >= 7.0){
	require __DIR__ . "/core/php7.php";
}

spl_autoload_register(function ($class) {
	$path = str_replace("Diman/Openlive/", "", str_replace("\\", "/", $class.".php"));
	if (file_exists($path)){
		require $path;
	}
	
});