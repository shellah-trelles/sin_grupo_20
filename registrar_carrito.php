<?php

include("conexion.php");

  $mysql_conn = db_connect();

  $consulta = "INSERT INTO detalle_carrito set idproducto_cd= '".$_POST['id']."', cantidad = '".$_POST['cantidad']."'";
  

  $res = mysqli_query($mysql_conn, $consulta);

  //echo $consulta;

  if($res){
	header("Location: checkout.php");
  }else{
  	header("Location: product.php");
  }



?>