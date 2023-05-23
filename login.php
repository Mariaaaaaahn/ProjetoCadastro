<?php
include('conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql= "SELECT * FROM usuario
where email_usuario ='$email'
and senha ='$senha'";

$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);
if($rowcount > 0)
include ('criasessao.php');
$_session['login'] = mysqli_fetch_array($result);
header('Location: index.php');
}else{ echo "<h1> Usuario não encontrado!</h1>";}

?>