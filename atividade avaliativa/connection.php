<?php

$stringConnection = 'sqlite:' . __DIR__ . '/database.sqlite';

try {
    $pdo = new PDO($stringConnection);

} catch (PDOException $e) {
    echo 'error!';
    echo $e;
}
