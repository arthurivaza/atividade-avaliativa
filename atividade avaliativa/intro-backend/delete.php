<?php
// delete.php
include 'connection.php';

$id = $_GET['id'];

try {
    $pdo = getConnection();
    $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
    $stmt->execute([$id]);

    echo "Aluno deletado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao deletar aluno: " . $e->getMessage();
}
?>
