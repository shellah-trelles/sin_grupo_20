<?php

include("conexion.php");

$mysql_conn = db_connect();

$consulta ="DELETE FROM detalle_carrito WHERE iddetalle_carrito = ".$_GET['id_cd'];

mysqli_query($mysql_conn, $consulta );

//echo $consulta;

header ("Location: checkout.php");



?>