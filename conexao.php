<?php 

$servidor = "localhost";
$username = "root";
$password = "";
$dbname = "bd_julha";

$conexao = mysqli_connect($servidor, $username, $password, $dbname) or die ("Não foi possivel conectar");
mysqli_select_db($conexao, $dbname);

?>