<?php
// store.php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uuid = $_POST['uuid'];
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];

    try {
        $pdo = getConnection();
        $stmt = $pdo->prepare("INSERT INTO alunos (uuid, matricula, nome, email, data_nascimento) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$uuid, $matricula, $nome, $email, $data_nascimento]);

        echo "Aluno cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar aluno: " . $e->getMessage();
    }
}
?>
