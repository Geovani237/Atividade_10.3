<?php include_once "header.php"; ?>
    <form action="inserir_cliente.php" method="POST">
        <h1>Cadastro de Clientes</h1>    
        <label>
            CPF:
            <input type="number" name="cpf">
        </label><br>

        <label>
            Nome:
            <input type="text" name="nome">
        </label><br>

        <label>
            Rua:
            <input type="text" name="rua">
        </label><br>

        <label>
            Número:
            <input type="text" name="numero">
        </label><br>

        <label>
            Bairro:
            <input type="text" name="bairro">
        </label><br>

        <label>
            Cidade:
            <input type="text" name="cidade">
        </label><br>

        <label>
            Estado:
            <input type="text" name="estado">
        </label><br>

        <label>
            E-mail:
            <input type="email" name="email">
        </label><br>

        <label>
            Telefone:
            <input type="text" name="telefone">
        </label><br>

        <label>
            Senha:
            <input type="password" name="senha">
        </label><br>

        <button type="submit">Enviar</button>
    </form>
    <?php include_once "footer.php"; ?>