<?php

//Conectar–se ao Banco de Dados
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'atv_prt_042_bd';

//Efetua a conexão com o Banco de Dados
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error
connecting to MySQL Server.');
