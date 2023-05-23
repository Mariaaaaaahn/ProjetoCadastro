<?php
include('conexao.php');
$id_usuario =$_POST['id_usuario'];
$nome =$_POST['nome'];
$email =$_POST['email'];
$fone =$_POST['fone'];
$senha =$_POST['senha'];//recendo e alterando

echo "<h1>Alteração de dados</h1>";
echo "<p>Usuário: $nome";
echo $id_usuario;

$sql = "UPDATE usuario SET
    nome_usuario='$nome',
    email_usuario='$email',
    fone_usuario='$fone',
    senha='$senha'
    WHERE id_usuario=$id_usuario"; /*Criando o comando para atualizar na tabela do usuario*/

    echo $sql;

    /*função que conecta no banco*/
    $result = mysqli_query($con, $sql);

if ($result) {
    echo "Dados atualizados com sucesso!<br>";
} else {
    echo "Ocorreu um erro ao atualizar os dados: " . mysqli_error($con) . "!";
}

?>

<a href="index.php">Voltar</a>