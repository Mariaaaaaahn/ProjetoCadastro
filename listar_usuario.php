<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM usuario";

    $result=mysqli_query($con, $sql);
    $row =mysqli_fetch_array($result);

    ?>    
    <h1>Consulta de Usuarios</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
        do{
            echo"<tr>";
            echo"<td>".$row['id_usuario']."</td>";
            echo"<td>".$row['nome_usuario']."</td>";
            echo"<td>".$row['email_usuario']."</td>";
            echo"<td>".$row['fone_usuario']."</td>";
            echo"<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>Alterar</a></td>";
            echo"<td><a href='exclui_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";


            echo "</tr>";

        } while($row = mysqli_fetch_array($result))
        ?>
    </table>

    <a href="index.php">Voltar</a>
  
</body>
</html>











</body>
</html>