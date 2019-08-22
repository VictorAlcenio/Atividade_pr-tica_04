<?php

include('3_conexao.php');


$consulta = "SELECT * FROM autos";
$con = $link -> query($consulta) or die ($link->error);

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>

    <body> <br> <br>
        <table border = "1">         <!-- table>tr*2>td*4 serve como atalho para construção de uma tabela -->
            <tr>
                <td><b> Fabricante </b></td>
                <td> <b> Ano de Fabricação </b> </td>
                <td> <b> Quilometragem </b> </td>
            </tr>

            <?php
                while ($dado = $con->fetch_array()){
                ?>
            
            <tr>
                <td> <?php print $dado["fabricante"]; ?> </td>
                <td> <?php print $dado["ano_fabricacao"]; ?> </td>
                <td> <?php print $dado["quilometragem"]; ?> </td>
            </tr>

                <?php    } ?>

        </table>              
  

    </body>

</html>
