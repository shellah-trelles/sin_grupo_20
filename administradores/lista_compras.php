<?php
	include("db_connect.php");
	$mysql_conn = db_connect();

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>NBA Collection | camisetas</title>
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
					
					
					
				</div>
			</div>
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
							<img  alt=" " class="img-fluid" style="height: 120px;">Tienda Online
						</a>
					</h1>
				</div>

				<div class="col-md-9 header mt-4 mb-md-0 mb-4" class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.php">camisetas
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="ver-producto.php">ver producto</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_electronics_info_storesl">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="electronics_inner_breadcrumb">
			<div class="container">
				<ul class="stores_short">
					<li>
						<a>NBA Collection</a> <!--href="product.php"-->
						<i>|</i>
					</li>
					<li>camisetas</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			
			<div class="row">
				<!-- product left -->
				<div class="electronicsinfo-ads-display col-lg-12">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php

									$consulta ="SELECT nombre, precio_inicial, ";
									$consulta.="precio_actual, id, categoria_id, ";
									$consulta.="imagen FROM prenda";

									$result = $mysql_conn->query($consulta);
									while($row = mysqli_fetch_array($result)){
										if ($row["categoria_id"]==1) {
											
										
											echo"<div class='col-md-4 product-men'>";
											echo"<div class='men-pro-item simpleCart_shelfItem'>";
											echo"<div class='men-thumb-item text-center' style='height: 1px width: 1px'>";
											echo"<img src='".$row['imagen']."' alt=''>";
											echo"<div class='men-cart-pro'>";
											echo"<div class='inner-men-cart-pro'>";
											
											echo"</div>";
											echo"</div>";
											echo"</div>";
											echo"<div class='item-info-product text-center border-top mt-4'>";
											echo"<h4 class='pt-1'>";
											echo"<a href='single.html'>".$row['nombre']."</a>";
											echo"</h4>";
											echo"<div class='info-product-price my-2'>";
											echo"<span class='item_price'>s/ ".$row['precio_actual']."</span>";
											echo"<del>s/ ".$row['precio_inicial']."</del>";
											echo"</div>";
											echo"<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out mb-4'>";
											echo"<form action='registrar_carrito.php' method='post'>";
											echo"<fieldset>";
											echo"<input type='hidden' name='id' value='".$row["id"]."' />";
											echo"<input type='hidden' name='cantidad' value='1' />";
											echo"<input type='submit' name='submit' value='A??adir al carrito' class='button btn' />";
											echo"</fieldset>";
											echo"</form>";
											echo"</div>";
											echo"</div>";
											echo"</div>";
											echo"</div>";
										}
									}
								?>
	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
								<h3>Env??os Gratis</h3>
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
								<h3>Env??os R??pidos</h3>
								<p>A Lima y a Provincias</p>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Gran Variedad</h3>
								<p>de camisetas</p>
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
								<a href="contact.html">Cont??ctanos</a>
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
	<!-- //footer -->
	<!-- copyright -->
	<!-- //copyright -->

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
	<script src="script/producto.js"></script>

</body>

</html>

