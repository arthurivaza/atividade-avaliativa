<?php
require 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("HTTP/1.0 405 Method Not Allowed");

    return ;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && (isset($_POST['name']))){
        $id = $_POST['id'];
        $name = $_POST['name'];

        $sql = "UPDATE teste SET name = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $id]);

        echo '#: ' . $id . ' atualizado com sucesso!';
        echo '<br><br><a href="list.php">Voltar</a>';
    }
}
