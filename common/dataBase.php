<?php

$mysqli = new mysqli( $dbHost, $dbUser, $dbPw, $dbName);

if ($mysqli->connect_error) {
    echo "Task list actually out of services, please come back later";
    exit();
}

?>