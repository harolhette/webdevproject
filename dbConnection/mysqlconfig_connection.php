<?php
    DEFINE('DB_USER', 'root')
    DEFINE('DB_PASSWORD', '');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('dbschedule', 'db');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, dbschedule)
    OR die('Could not connect to MySQL: ' . mysql_connect_error());
?>