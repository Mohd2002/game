<?php
/*
This file contains database config.phpuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'vitmlyni_fiewins');
define('DB_PASSWORD', 'vitmlyni_fiewins');
define('DB_NAME', 'vitmlyni_fiewins');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
    Echo"Fail";
}

?>