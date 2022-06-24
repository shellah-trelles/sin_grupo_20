<?php
session_start();
if($_SESSION["conectado"] != "1"){
	header("Location: login.html");
}
?>
<?php

include("conexion.php");

$mysql_conn = db_connect();

$consulta ="DELETE FROM boleta WHERE idboleta = ".$_GET['c_id'];

mysqli_query($mysql_conn, $consulta );

//echo $consulta;

header ("Location: lista_compras.php");



?>