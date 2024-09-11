<!-- create.php -->
<form action="store.php" method="post">
    <label for="uuid">UUID:</label>
    <input type="text" name="uuid" id="uuid" required><br>
    
    <label for="matricula">Matrícula:</label>
    <input type="text" name="matricula" id="matricula" required><br>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" name="data_nascimento" id="data_nascimento" required><br>

    <input type="submit" value="Cadastrar Aluno">
</form>
