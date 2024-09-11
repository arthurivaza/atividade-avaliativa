<?php
// list.php
include 'connection.php';

try {
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM alunos");
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao buscar alunos: " . $e->getMessage();
}
?>

<h1>Lista de Alunos</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>UUID</th>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
    </tr>
    <?php foreach ($alunos as $aluno): ?>
    <tr>
        <td><?= $aluno['id'] ?></td>
        <td><?= $aluno['uuid'] ?></td>
        <td><?= $aluno['matricula'] ?></td>
        <td><?= $aluno['nome'] ?></td>
        <td><?= $aluno['email'] ?></td>
        <td><?= $aluno['data_nascimento'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
