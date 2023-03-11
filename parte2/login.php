<?php include_once "header.php"; ?>
    <form action="validar.php" method="POST">
        <label for="cpf">CPF:</label>
        <input name="cpf" id="cpf" placeholder="Digite O CPF">
        </br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Senha">
        </br>
        <button type="submit">Entrar</button>
    </form>

<?php include_once "footer.php"; ?>