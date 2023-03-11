<?php include_once "header.php"; ?>
    <form action="inserir_produto.php" method="POST">
        <label>
            Nome do Produto:
            <input type="text" name="nome">
        </label></br>
        
        <label>
            Categoria do Produto:
            <input type="text" name="categoria_produto">
        </label></br>
        
        <label>
            Quantidade:
            <input type="number" name="quantidade">
        </label></br>
        
        <label>
            Preço de compra:
            <input type="text" name="preco_compra">
        </label></br>
        
        <label>
            Preço venda:
            <input type="text" name="preco_venda">
        </label></br>

        <button type="submit">Enviar</button>
    </form>
    <?php include_once "footer.php"; ?>