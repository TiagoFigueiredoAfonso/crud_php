<?php 
include('conexao.php');

$sql_clientes = "SELECT * FROM clientes";
$query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error);
$num_clientes = $query_clientes->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <a href="cadastrar_cliente.php">Formulário</a>
    <h2>Lista de Clientes</h2>

    <table class="table container">
        <theady>
            <th>ID</th>
            <th>Data</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Nascimento</th>
            <th>Telefone<th>           
           
            
        </theady>
        <tbody>
            <?php if($num_clientes == 0) { ?>
                <tr>
                <td colspan="7">Nenhum cliente cadastrado</td>
                
            </tr>
            <?php }else { 
                while($cliente = $query_clientes->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $cliente['id'] ?></td>
                <td><?php echo $cliente['data'] ?></td>
                <td><?php echo $cliente['nome'] ?></td>
                <td><?php echo $cliente['email'] ?></td>
                <td><?php echo $cliente['nascimento'] ?></td>
                <td><?php echo $cliente['telefone'] ?></td>
                
                                     
                
            </tr>

            <?php 
            } 
        }?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>