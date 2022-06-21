<?php

    if(count($_POST) > 0) {
       var_dump($_POST);
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="clientes.php">Voltar</a>
    <form action="" method="post">
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label for="nascimento">Nascimento</label>
            <input type="text" name="nascimento">
        </p>
        <p>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" >
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>