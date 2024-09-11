<?php
require 'connection.php';

echo '<h2> Store </h2>';

try{
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['name'])){
            $name = $_POST['name'];

            // $sql = "INSERT INTO teste (name) VALUES (" . $name . ")";
            $sql = "INSERT INTO teste (name) VALUES (?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name]);

            echo $name . ' inserido com sucesso!';
        }
    }

} catch (PDOException $e) {
    echo $e;
}
