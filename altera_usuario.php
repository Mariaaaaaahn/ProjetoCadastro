<?php
include ('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = "SELECT * from usuario where id _usuario=$id_usuario";
$result=mysqli_query($con, $sql);
$row =mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Ususario - IFSP</h1>
    <form action="cadastro_usuario.php" method="post">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"
            value="<?php echo $row['nome_usuario']?>">
        </div>
        <div>
            <label for="email">Eamil: </label>
            <input type="email" name="email" id="email"
            value="<?php echo $row['email_usuario']?>">
        </div> 
        <div>
            <label for="fone">Telefone: </label>
            <input type="tel" name="fone" id="fone" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"value="<?php echo $row['fone_usuario']?>">
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha">
        </div>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>