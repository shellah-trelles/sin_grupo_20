<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>NBA Collection | Ver camisetas</title>
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
	<div class="electronics-main-top">
		<div class="container-fluid">
			<div class="row main-top-storesl py-2">
				<div class="col-lg-6 header-most-top">
					<p class="text-white text-lg-left text-center">Envios gratis por compras desde S/300.00
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-6 header-right mt-lg-0 mt-2 text-right">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i> Ubicación</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Por favor seleccione distrito</h3>
			<select class="list_of_cities">
				<optgroup label="Locales">
					<option selected style="display:none;color:#eee;">Seleccionar distrito</option>
					<option>Piura</option>
					<option>Castilla</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->

	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">	
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="col-md-3 logo_electronics">
					<h1 class="text-center">
						<a href="#" class="font-weight-bold font-italic">
							<img src="imagenes/nc_logo.png" alt=" " class="img-fluid" style="height: 70px;"> NBA Collection
						</a>
					</h1>
				</div>

				<div class="col-md-9 header mt-4 mb-md-0 mb-4" class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
					<!--	<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.php">BLusas
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product2.php">Jeans
								<span class="sr-only">(current)</span>
							</a>
						</li> -->
						<!--<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">Sobre Nostros</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="contact.html">Contáctanos</a>-->
						</li>
					</ul>
				</div>
			</nav>
		</div>

	<!-- //banner-2 -->
	<!-- page -->
	
	<!-- //page -->
	<!-- checkout page -->

		<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-storesl text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>ompras
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<div class="table-responsive">

<?php

	include("conexion.php");

	$mysql_conn = db_connect();

?>

					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th>Acción</th>
							</tr>
						</thead>

						<tbody >
							<?php

								$consulta ="SELECT iddetalle_carrito as iddetalle_carrito, Nombre, idproducto_cd, Cantidad, Precio FROM detalle_carrito join producto on detalle_carrito.idproducto_cd=producto.idProducto";
								//$consulta ="SELECT idProducto FROM producto on producto.idProducto = detalle_carrito.idproducto_cd";
								$result = $mysql_conn->query($consulta);
								$i = 1;
								while($row = mysqli_fetch_array($result)){
									echo "<tr>";
									//echo "<td><img src=".$row["imagen"]." style = 'height:80px'></td>";
									echo "<td>".$row["Nombre"]."</td>";
									echo "<td>";
									echo "<span>".$row["Cantidad"]."</span>";
									echo "</td>";
									echo"<td> s/ ".$row["Precio"]."</td>";
									echo "<td class='invert'>";
									echo "<div class='rem'><h1><a href='ver_editar.php?id_cd=".$row["iddetalle_carrito"]."'>";
									echo "<div class='editar1'></div></a></h1>";
									echo "</div>";
									echo "<div class='rem'><h1><a href='eliminar.php?id_cd=".$row["iddetalle_carrito"]."'>";
									echo "<div class='close1'></div></a></h1>";
									echo "</div>";
									echo "</td>";
									echo"</tr>";

									$i = $i+1;
								}
							?>	
								
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-right-basket">
				<div class="address_form_electronics mt-sm-3 mt-4">
				<div class="checkout-right row" style="display:flex; justify-content: flex-end;">
						<?php
						$sql="SELECT * from producto join detalle_carrito on producto.idProducto = detalle_carrito.idproducto_cd";
						$result = mysqli_query($mysql_conn, $sql);

						$subtotal=0;
						$envio=0;
						$imp=0;
						$total=0;

						while($row = mysqli_fetch_assoc($result)){
							$subtotal=$subtotal+($row["Precio"])*($row["cantidad"]);

						}

						
						?>
					<table class="table table-striped col-sm-3 float-right">
						<?php 
							if($subtotal>200){
							$envio=$envio;
						}else{
							$envio=29;
						}

						if($subtotal>0){
							?>
						<tbody>
							
							<tr>
								<th>Subtotal</th>
								<td>S/. <?php echo $subtotal ?></td>
							</tr>
							<tr>
								<th>Envio</th>
								<td>S/. <?php echo $envio ?></td>
							</tr>
							<?php 
								$imp=0.18*$envio;
								if($imp>0){
							?>
							<tr>
								<th>Impuesto</th>
								<td>S/. <?php echo $imp ?></td>
							</tr>
							<?php 
								}
							?>
							<tr>
								<th>Total</th>
								<td>S/. <?php echo $subtotal ?></td>
							</tr>
						</tbody>
						<?php 
								}
							?>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_electronics mt-sm-5 mt-4">
					<div class="checkout-right-basket">
						<a href="payment.php">Proceder con el pago
						</a>
						<a href="product.php">Continuar comprando
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- //checkout page -->

	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<div class="row storesl-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Envíos Gratis</h3>
								<p>Por compras superiores a s/ 300.00</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Envíos Rápidos</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Gran Variedad</h3>
								<p>de Productos</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="storesl-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info stores-electronicsits-info">
					<!-- footer categories -->
					<div class="col-md-4 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categorias</h3>
						<ul>
							<li class="mb-3">
								<a href="product.php">camisetas</a>
							</li>
							
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-4 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-4">Nosotros</h3>
						<ul>
							<li class="mb-4">
								<a href="about.html">Sobre Nosotros</a>
							</li>
							<li class="mb-4">
								<a href="contact.html">Contáctanos</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Datos de Contacto</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 123 comercio, Principal.</li>
                                <li class="mb-3">
								<i class="fas fa-map-marker"></i> 345 progreso, Castilla.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 903875648 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="#">NBACollection@example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
	</footer>

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- quantity -->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!-- //quantity -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
	<script  src="script/producto.js"></script>

</body>

</html>
