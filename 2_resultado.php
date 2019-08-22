<?php

include('2_conexao.php');

?>

<!DOCTYPE html>

<html> 
   <head>
    <meta charset="utf-8" />
    <title>Dados</title>
   </head> 
 
    <body>

     <h1>Dados do usuário</h1>

         <?php
         
         
         $consulta = "SELECT * FROM teste1";
         $result = mysqli_query( $link, $consulta ) or die ("Error in consult");

         //Fetch the result into an associative array
         while ( $row = mysqli_fetch_assoc( $result ) ) {
         $table[] = $row; //add each row into the table array
         }
         ?>

            <table border = "1">
            <tr>
            <td><strong>Nome</strong></td>
            <td><strong>Idade</strong></td>
            </tr>
         
            <?php
            if ($table) { 
            foreach($table as $line) {
            ?>
            <tr>
               <td> <?php echo ($line["nome"]); ?> </td>
               <td> <?php echo ($line["idade"]); ?> </td>
            </tr>
            <?php
            }
            }
            ?>
      </table>

         <p><b> Número de Registros: </b> <?php echo(mysqli_num_rows($result)); ?></p>
        
        <?php
         mysqli_close($link);
        ?>

    </body>

</html>
