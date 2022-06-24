<?php

include("conexion.php");

$mysql_conn = db_connect();

$sql="SELECT * from producto join detalle_carrito on producto.idProducto = detalle_carrito.idproducto_cd";
$result = mysqli_query($mysql_conn, $sql);

$subtotal=0;
$envio=0;
$imp=0;						
$total=0;						
$prendas="";																		

while($row = mysqli_fetch_assoc($result)){
	$prendas=$prendas.($row["Nombre"]).", ";						
	$subtotal=$subtotal+($row["Precio"])*($row["cantidad"]);						
}						

if($subtotal>200){
	$envio=$envio;													
}else{
	$envio=29;						
}												

$imp=0.18*$envio;
if($imp>0){						
}						
$total=1.18*($envio)+$subtotal;						
					


$sql ="INSERT INTO boleta SET name ='".$_POST['name']."', ";
$sql.="email='".$_POST["email"]."', ";
$sql.="telefono='".$_POST["telefono"]."', ";
$sql.="local='".$_POST["local"]."', ";
$sql.="direccion='".$_POST["direccion"]."', ";
$sql.="numero_tarjeta='".$_POST["name_tarje"]."', ";
$sql.="cvv='".$_POST["security-code"]."', ";
$sql.="fvenc_tarjeta='".$_POST['expiration-month-and-year']."', ";
$sql.="prendas='".($prendas)."', monto ='".($total)."'";

//echo $sql;
mysqli_query($mysql_conn, $sql);


$sql="DELETE from detalle_carrito";

mysqli_query($mysql_conn, $sql);
echo "Pago exitoso";
header("Location:pagoexitoso.php");

?>