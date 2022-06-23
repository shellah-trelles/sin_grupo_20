<?php

include("db_connect.php");

$mysql_conn = db_connect();

//$sql = "SELECT id FROM administrador WHERE nombres = '".$_POST['u']."' and contraseña = MD5('".$_POST['p']."')";
$sql = "SELECT idadministrador FROM administrador WHERE nombres = '".$_POST['u']."' and contraseña = '".$_POST['p']."'";

$res = mysqli_query($mysql_conn, $sql);

if (mysqli_num_rows($res) == 1) {
	session_start();
	$_SESSION["conectado"] = "1";
	$_SESSION["admin_nombre"] = $_POST['u'];

	mysqli_close($mysql_conn);

	header("Location: lista_compras.php");

}else{
	header("Location: login.html");
}

//echo mysqli_error($mysql_conn);






?>