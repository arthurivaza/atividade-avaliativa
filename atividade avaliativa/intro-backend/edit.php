<?php
// edit.php
include 'connection.php';

$id = $_GET['id'];

try {
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = ?");
    $stmt->execute([$id]);
    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao buscar aluno: " . $e->getMessage();
}
?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $aluno['id'] ?>">
    
    <label for="uuid">UUID:</label>
    <input type="text" name="uuid" value="<?= $aluno['uuid'] ?>" required><br>

    <label for="matricula">Matrícula:</label>
    <input type="text" name="matricula" value="<?= $aluno['matricula'] ?>" required><br>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $aluno['nome'] ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $aluno['email'] ?>" required><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" name="data_nascimento" value="<?= $aluno['data_nascimento'] ?>" required><br>

    <input type="submit" value="Atualizar Aluno">
</form>
