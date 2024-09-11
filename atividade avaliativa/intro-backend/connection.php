<?php
// connection.php
function getConnection() {
    try {
        // Conectar ao banco de dados SQLite
        $pdo = new PDO('sqlite:atividade_db.sqlite');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        exit();
    }
}
?>
