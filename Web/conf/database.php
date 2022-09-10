<?php

$DatabaseURLInfo = __DIR__ . "/database.txt";
if (!file_exists($DatabaseURLInfo)){
	file_put_contents($DatabaseURLInfo, "sqlite:" . __DIR__ . "/../storage/database.db");
}
$DatabaseURL =  file_get_contents($DatabaseURLInfo);

$db_type_regex = '/mysql|sqlite/m';
preg_match_all($db_type_regex, $DatabaseURL, $matches, PREG_SET_ORDER, 0);
$db_type=$matches[0] ?? null;
if ($db_type){
	$DatabaseType=$db_type[0];
} else{
	throw new \LogicException("unknown type of database or this database not support!");
}
