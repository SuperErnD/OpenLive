<?php
$DatabaseURL = getenv("DATABASE");
if(!$DatabaseURL) {
  $DatabaseURL = "sqlite:" . __DIR__ . "/../storage/database.db";
}
