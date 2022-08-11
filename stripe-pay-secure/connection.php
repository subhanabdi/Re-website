<?php

session_start();

define('DBHOST', 'localhost');
                        define('DBUSER', 'interons_ronline');
                        define('DBPASS', '4o8^PYO],=pH');
                        define('DBNAME', 'interons_ronlinepro');
define('DEBUG', true);

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or custom_die('Database Connection Error', mysqli_connect_error());

function custom_die($message, $error)
{
	if (DEBUG)
	{
		echo $message . ': ' . $error;
		die();
	}
	else
	{
		echo $message;
		die();
	}
}

?>