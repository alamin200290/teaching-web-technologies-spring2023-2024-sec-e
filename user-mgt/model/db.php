<?php 

    $host = "localhost";
    $dbname = "webtech";
    $dbuser = "root";
    $dbpass = "";

    function dbConnection(){
        global $host;
        global $dbname;

        $con = mysqli_connect($host, $GLOBALS['dbuser'], $GLOBALS['dbpass'], $dbname);
        return $con;
    }


?>