<?php

//Conectar–se ao BD
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'atv_prt_043_bd';

//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error
connecting to MySQL Server.');
