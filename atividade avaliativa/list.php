<?php
require 'connection.php';

echo '<h1> Listando </h1>';

try {
    $stmt = $pdo->query("SELECT * FROM teste");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<ul>';
    foreach ($items as $item) {
        echo '<li>';
        echo '<a href="/edit.php?id='. $item['id'] .'"> #' . $item['id'] . ' - ' . $item['name'] . '</a>';
        echo '</li>';
    }
    echo '</ul>';

} catch (PDOException $e) {
    echo 'error!';
    echo $e;
}
