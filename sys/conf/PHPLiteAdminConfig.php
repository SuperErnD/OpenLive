<?php 
/*
    PHPLiteAdmin Config
    Delete this and www/admin/databaseManagment.php if you not use SQLite
*/

// Password
$password = 'admin';

//directory relative to this file to search for databases (if false, manually list databases in the $databases variable)
$directory = '../';

//whether or not to scan the subdirectories of the above directory infinitely deep
$subdirectories = false;

// Database
$databases = array(
	array(
		'path'=> 'database.sqlite',
		'name'=> 'Main database'
	)
);


/* ---- Interface settings ---- */

// Theme! If you want to change theme, save the CSS file in same folder of phpliteadmin or in folder "themes"
$theme = 'phpliteadmin.css';

// the default language! If you want to change it, save the language file in same folder of phpliteadmin or in folder "languages"
// More about localizations (downloads, how to translate etc.): https://bitbucket.org/phpliteadmin/public/wiki/Localization
$language = 'en';

// set default number of rows. You need to relog after changing the number
$rowsNum = 30;

// reduce string characters by a number bigger than 10
$charsNum = 300;

// maximum number of SQL queries to save in the history
$maxSavedQueries = 10;

/* ---- Custom functions ---- */

//a list of custom functions that can be applied to columns in the databases
//make sure to define every function below if it is not a core PHP function
$custom_functions = array(
	'md5', 'sha1', 'strtotime',
	// add the names of your custom functions to this array
	/* 'leet_text', */
);

// define your custom functions here
/*
function leet_text($value)
{
  return strtr($value, 'eaAsSOl', '344zZ01');
}
*/


/* ---- Advanced options ---- */

//changing the following variable allows multiple phpLiteAdmin installs to work under the same domain.
$cookie_name = 'pla3412';

//whether or not to put the app in debug mode where errors are outputted
$debug = false;

// the user is allowed to create databases with only these extensions
$allowed_extensions = array('db','db3','sqlite','sqlite3');

// BLOBs are displayed and edited as hex string
$hexblobs = false;

/*
    PHPLiteAdmin Config END
*/
