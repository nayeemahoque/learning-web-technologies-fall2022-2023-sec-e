<?php 
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mini_project_db";

    function getConnection() {
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbname;

        $connection = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        return  $connection;
    }
?>