<?php
require 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("HTTP/1.0 405 Method Not Allowed");

    return ;
}


echo '<!DOCTYPE html>';
echo '<html lang="en">';

echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Document</title>';
echo '</head>';

echo '<body>';

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])){
        $id = $_GET['id'];

        // // $sql = "INSERT INTO teste (name) VALUES (" . $name . ")";
        $sql = "SELECT name FROM teste WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $item = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($item) > 0) {
            echo '<h2> Editar </h2>';
            echo '<form action="/update.php" method="POST">';
            echo '  <label for="name">Name:</label>' ;
            echo '  <input type="text" id="name" name="name" value="' . $item[0]['name'] . '"><br><br>';
            echo '  <input type="hidden" id="id" name="id" value="' . $id . '"><br><br>';
            echo '  <input type="submit" value="Salvar">';
            echo '</form>';
        } else {
            echo 'id não encontrado';
        }

    } else {
        echo 'id não informado';
    }
}

echo '</body>';

echo '</html>';
