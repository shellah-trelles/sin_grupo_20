<?php 
if(isset($_POST['iddetalle_carrito'])){
	$id= $_POST['iddetalle_carrito'];
	$nombre= $_POST['Nombre'];
	$cantidad= $_POST['Cantidad'];

	include("conexion.php");

  $mysql_conn = db_connect();

  $consulta = "UPDATE detalle_carrito set cantidad=".$cantidad." where iddetalle_carrito= ".$id;

  $res = mysqli_query($mysql_conn, $consulta);

  //echo $consulta;
  print_r($res);
  if($res){
  	header("Location: checkout.php");
  }else{
  	header("Location: ver_editar.php?id_cd=".$id);
  }

	


}

?>