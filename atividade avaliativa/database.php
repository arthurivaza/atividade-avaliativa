<?php

require 'connection.php';

try {

    $pdo->exec("CREATE TABLE teste (id INTEGER PRIMARY KEY, name TEXT NOT NULL)");

    echo "database created";
} catch (PDOException $e) {
    echo 'error!';
    echo $e;
}
