<?php

include("db_connect.php");

$mysql_conn = db_connect();

//$sql="SELECT idcliente FROM cliente WHERE email='".$_POST['e']."' and contraseña = MD5('".$_POST['p']."')";
$sql="SELECT idcliente FROM cliente WHERE email='".$_POST['e']."' and contraseña = '".$_POST['p']."'";
echo $sql;
/*$res=mysqli_query($mysql_conn, $sql);

if(mysqli_num_rows($res) == 1){
	session_start();
	$_SESSION['conectado']="1";
	$_SESSION['cliente_email']= $_POST['e'];

	mysql_close($mysql_conn);

	header("Location: vista_cliente.php");

} else{
	header("Location: index.html");
}/*

?>