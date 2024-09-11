<?php
// update.php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $uuid = $_POST['uuid'];
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];

    try {
        $pdo = getConnection();
        $stmt = $pdo->prepare("UPDATE alunos SET uuid = ?, matricula = ?, nome = ?, email = ?, data_nascimento = ? WHERE id = ?");
        $stmt->execute([$uuid, $matricula, $nome, $email, $data_nascimento, $id]);

        echo "Aluno atualizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao atualizar aluno: " . $e->getMessage();
    }
}
?>
