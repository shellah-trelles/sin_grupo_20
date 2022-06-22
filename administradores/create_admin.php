<?php

include("db_connect.php");

$mysql_conn = db_connect();

$sql = "INSERT INTO administrador SET nombres = '".$_POST['u']."' , contraseña = MD5('".$_POST['p']."')";

//echo $sql;
$res = mysqli_query($mysql_conn, $sql);
//echo mysqli_error($mysql_conn);
//mysqli_close($mysql_conn);

header("Location: form_admin.html");


?>