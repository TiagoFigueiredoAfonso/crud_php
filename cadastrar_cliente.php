<?php
  
    function limpar_texto($str){ 
        return preg_replace("/[^0-9]/", "", $str); 
      }

     
    if(count($_POST) > 0) {
       $erro = false;
       include('conexao.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $nascimento = $_POST['nascimento'];
       $telefone = $_POST['telefone'];
       
       if(empty($nome)) {
           $erro = "Preencha o nome";          
       }
       if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $erro = "Preencha o email";           
       }      
    
        if(!empty($nascimento)){
            $pedacos = explode("/", $nascimento);
            if(count($pedacos) == 3) {
                $nascimento = implode('-', array_reverse($pedacos));
            }else {
                $erro = "A data deve ser seguir o padrão dia/mes/ano";
            }
            
        }
        if(!empty($telefone)) {
            $telefone = limpar_texto($telefone);
            if(strlen($telefone) != 11) {
                $erro = "O telefone deve seguir o padrão (XX) XXX-XXXX";
            }
        }
       
    }
    if($erro) {
        echo "<p>$erro</p>";
    }else {
        $sql_code = "INSERT INTO clientes (nome, email, nascimento, telefone, data) VALUES ('$nome', '$email', '$nascimento', '$telefone', NOW())";
        
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
       
        if($deu_certo) {
            echo "<p><b>cliente cadastrado com sucesso</b></p>";
            unset($_POST);
        }
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
            <input type="text" name="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']?>">
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
        </p>
        <p>
            <label for="nascimento">Nascimento</label>
            <input type="text" name="nascimento" value="<?php if(isset($_POST['nascimento'])) echo $_POST['nascimento']?>">
        </p>
        <p>
            <label for="telefone">Telefone</label>
            <input placeholder="(XX) XXX-XXXX" type="text" name="telefone" value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']?>" >
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>

    
</body>
</html>