<?php

include('3_conexao.php');

//Obtém os valores do formulário
$fab = $_POST['fabricante'];
$ano = $_POST['ano_fabricado'];
$km_rod = $_POST['km'];

//Cria a Query SQL
$query = "INSERT INTO autos (fabricante, ano_fabricacao, quilometragem) VALUES ('$fab', '$ano', '$km_rod')";

$result = mysqli_query( $link, $query ) or die('Error querying database.');

//Fechar a conexão com o BD
mysqli_close($link);

header('location: 3_resultado.php');
