<?php
require 'connection.php';

header('Content-Type: application/json');

try {
    $stmt = $pdo->query("SELECT * FROM teste");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($items);

} catch (PDOException $e) {

    echo json_encode($e);
}
