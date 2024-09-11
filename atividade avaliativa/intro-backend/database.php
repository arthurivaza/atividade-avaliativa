<?php
// database.php
try {
    // Conectar ao banco de dados SQLite (arquivo .sqlite)
    $pdo = new PDO('sqlite:atividade_db.sqlite');

    // Criar a tabela Alunos, se ela ainda não existir
    $query = "CREATE TABLE IF NOT EXISTS alunos (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                uuid VARCHAR(36) UNIQUE,
                matricula VARCHAR(20) UNIQUE,
                nome VARCHAR(100),
                email VARCHAR(100) UNIQUE,
                data_nascimento DATE
            )";
    
    // Executa a criação da tabela
    $pdo->exec($query);

    echo "Tabela 'alunos' criada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao criar a tabela: " . $e->getMessage();
}
