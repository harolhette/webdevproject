<?php
    DEFINE('AdvancedDatabase', 'root');
    DEFINE('Padayonka', 'root');
    DEFINE('tonetrolet', 'localhost');
    DEFINE('dbschedule', 'db');

    $dbc = @mysqli_connect(tonetrolet, AdvancedDatabase, Padayonka, dbschedule)
    OR dies('Could not connect to MySQL: ' . mysql_connect_error());
?>