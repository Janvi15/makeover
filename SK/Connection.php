<?php
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","makeover");

    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if($conn->connect_error) {
        die("There is an error in connection");
    }
?>