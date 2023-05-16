<?php
<<<<<<< HEAD
include ('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = "SELECT * from usuario where id_usuario=$id_usuario";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
=======
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "SELECT * FROM usuario where id_usuario=$id_usuario";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
>>>>>>> f3e3b52ff05bdf4057553c8271c014333cc67254
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
<<<<<<< HEAD
    <h1>Cadastro de Ususario - IFSP</h1>
    <form action="altera_usuario_exe.php" method="post">
        <input name="id_usuario" type="hidden"
            value="<?php echo $row['id_usuario']?>">
=======
    <!--http://localhost/PRW/Banco%20de%20dados/Aulas/altera_usuario?id_usuario=1 -->
    <h1>Cadastro de Usuarios - IFSP</h1>
    <form action="altera_ususario_exe.php" method="POST" >
    <input name="id_usuario" type="hidden"
        value="<?php echo $row ['id_usuario']?>">

>>>>>>> f3e3b52ff05bdf4057553c8271c014333cc67254
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"
            value="<?php echo $row['nome_usuario'] ?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email"
            value="<?php echo $row['email_usuario'] ?>">
            
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (18) 9999-8888"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}"
            value="<?php echo $row['fone_usuario'] ?>">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha"
            value="<?php echo $row['senha'] ?>">
        </div>
        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>
</body>
</html>