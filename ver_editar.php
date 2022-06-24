
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> NBA Collection </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<?php

  include("conexion.php");

  $mysql_conn = db_connect();

?>

<?php

  //$sql = "SELECT iddetalle_carrito, cantidad from detalle_carrito
				//inner join producto on producto.idProducto = detalle_carrito.idproducto_cd where detalle_carrito.iddetalle_carrito =".$_GET["id_cd"];
  $sql ="SELECT iddetalle_carrito as iddetalle_carrito, Nombre, idproducto_cd, Cantidad FROM detalle_carrito join producto on detalle_carrito.idproducto_cd=producto.idProducto";
 // $sql .= "WHERE carrito_detalle.id = ".$_GET["id_cd"];

  $result = mysqli_query($mysql_conn, $sql);

  $row_carrito = mysqli_fetch_assoc($result);


?>
	<!-- log in -->
	<div class="container" style="border:1px solid light blue;width:250px; margin:0 auto;margin-top: 20px; padding: 10px; border-radius: 20px; box-shadow: 1px 1px 10px blue;">
<div class="container">
		          <h4 style="" class="text-info text-center">Modificar pedido</h4>
		          <p class=" text-center">Ingrese la cantidad.</p>
		        </div>
		        <hr>
<div class="container" >
	<form role="form" style="" action="guardar_editado_prod.php" method="post">
  <div class="form-group">
    <input type="hidden" class="form-control" name="iddetalle_carrito" value="<?php echo $row_carrito["iddetalle_carrito"] ?>">
  </div>
  <div class="form-group">
    <label for="email">Nombre:</label>
    <input type="text" class="form-control" name="Nombre"  value="<?php echo $row_carrito["Nombre"] ?>">
  </div>
  <div class="form-group">
    <label for="email">Cantidad:</label>
    <input type="number" class="form-control" name="Cantidad" value="<?php echo $row_carrito["Cantidad"] ?>">
  </div>
  <button type="submit" class="btn btn-info">Guardar</button>
  <a href="checkout.php" class="btn btn-danger">Cancelar</a>
</form>
</div>
</div>


						
				
</body>

</html>