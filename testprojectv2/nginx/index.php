<?php
    $host        = "host = postgres";
    $port        = "port = 5432";
    $dbname      = "dbname = postgres";
    $credentials = "user = postgres password = pass";

    $db = pg_connect( "$host $port $dbname $credentials" );
    if(!$db) {
        echo "Error: Unable to open database\n";
    } else {
        echo "Database opened successfully\n";
    }
?>