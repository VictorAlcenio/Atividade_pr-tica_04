<?php

include('1_conexao.php');


$consulta = "SELECT membros.nome, membros.email, membros.escola, membros.funcao, escolas.estado, equipes.nome_equipe FROM membros, equipes, escolas WHERE membros.numero_equipe = equipes.numero_equipe AND membros.escola = escolas.nome_escola";
$con = $link -> query($consulta) or die ($link->error);

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>

    <body> <br> <br>
        <table border="1">         <!-- table>tr*2>td*4 serve como atalho para construção de uma tabela -->
            <tr>
                <td ><b>Membro</b></td>
                <td> <b>Email</b> </td>
                <td> <b>Escola</b> </td>
                <td> <b>Estado</b></td>
                <td> <b>Função</b> </td>
                <td> <b>Nome da Equipe</b> </td>
            </tr>

            <?php
                while ($dado = $con->fetch_array()){
                ?>
            
            <tr>
                <td> <?php print $dado["nome"]; ?> </td>
                <td> <?php print $dado["email"]; ?> </td>
                <td> <?php print $dado["escola"]; ?> </td>
                <td> <?php print $dado["estado"]; ?> </td>
                <td> <?php print $dado["funcao"]; ?> </td>
                <td> <?php print $dado["nome_equipe"]; ?> </td>
            </tr>

                <?php    } ?>

        </table>              
  

    </body>

</html>
