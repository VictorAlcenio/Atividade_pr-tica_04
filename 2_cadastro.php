<?php

include('2_conexao.php');

//Obtém os valores do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Cria a Query SQL
$query = "INSERT INTO teste1 (nome, idade) VALUES ('$nome', '$idade')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');

//Fechar a conexão com o Banco de Dados
mysqli_close($link);

header('location: 2_resultado.php');

?>
