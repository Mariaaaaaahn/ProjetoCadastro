<h1>DELETANDO</h1>
<?php
include ('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = "DELETE FROM usuario WHERE id_usuario=$id_usuario";
echo $sql;
$result = mysqli_query($con,$sql); 


?>