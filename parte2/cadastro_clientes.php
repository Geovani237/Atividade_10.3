<?php include_once "header.php"; ?>
<form action="inserir_cliente.php" method="POST">
    <div class="container">
        <div class="row">
            <h1>Cadastro de Clientes</h1>
            <div class="col-6">
                CPF:
                <input class="form-control" type="number" name="cpf">
            </div>
            <div class="col-6">
                Nome:
                <input class="form-control" type="text" name="nome">
            </div>


            <div class="col-4">
                Rua:
                <input class="form-control" type="text" name="rua">
            </div>

            <div class="col-4">
                Número:
                <input class="form-control" type="text" name="numero">
            </div>

            <div class="col-4">
                Bairro:
                <input class="form-control" type="text" name="bairro">
            </div>

            <div class="col-6">
                Cidade:
                <input class="form-control" type="text" name="cidade">
            </div>

            <div class="col-6">
                Estado:
                <input class="form-control" type="text" name="estado">
            </div>

            <div class="col">
                E-mail:
                <input class="form-control" type="email" name="email">
                </div>

            <div class="col">
                Telefone:
                <input class="form-control" type="text" name="telefone">
        
            </div>

            <div class="col">
                Senha:
                <input class="form-control" type="password" name="senha">
            </div>
            
            <button class="btn btn-primary" type="submit">Enviar</button>

        </div>

    </div>
</form>
<?php include_once "footer.php"; ?>