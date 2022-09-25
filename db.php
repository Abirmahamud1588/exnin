<?php

define('HOSTNAME', 'localhost');
define('DBNAME', 'exnin');
define('DBUSER', 'root');

define('DBPASS', '');



$conn = mysqli_connect( HOSTNAME, DBUSER, DBPASS, DBNAME);

if(!$conn){
    echo "Not connected";
}





?>