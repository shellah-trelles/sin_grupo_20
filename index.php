<<<<<<< Updated upstream
<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
  include "data_camisetas.php";
  include "plantillas.php";
  include "data.php";
  include "templates.php";
  echo $header_html;
  if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0){
 ?>
  <div class="container">
    <div class="row">
      <div class="card">
       <div class="card-body">
         <h5 class="card-title">Carrito de compras</h5>
         <p class="card-text">Lista de productos seleccionados.
          <table class="table table-condensed">
            <thead>
              <th>Código</th>
              <th>Producto</th>
              <th style="text-align: right;">Cantidad</th>
              <th style="text-align: right;">Precio</th>
              <th style="text-align: right;">Subtotal</th>
              <th>&nbsp;</th>
            </thead>
            <tbody>
           <?php
           $total = 0;
           foreach ($_SESSION["cart"] as $key => $value) {
             # se calcula el subtotal y se va aumentando el total en el bucle
              $subtotal = $products[$key]["price"]*$value["qty"];
              $total += $subtotal;
             ?>

             <tr>
               <td><?php echo $products[$key]["id"] ?></td>
               <td><?php echo $products[$key]["name"] ?></td>
               <td style="text-align: right;"><?php echo $value["qty"] ?></td>
               <td style="text-align: right;"><?php echo $products[$key]["price"] ?></td>
               <td style="text-align: right;"><?php echo $subtotal ?></td>
               <td>
                 <a href="remove_from_cart.php?id=<?php echo $key ?>" title="Disminuir"><i class="fa fa-minus" aria-hidden="true"></i></a>&nbsp;&nbsp;
                 <a href="remove_from_cart.php?removeAll=1&id=<?php echo $key ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
               </td>
             </tr>
          <?php }} ?>
          <tfoot>
            <tr>
              <td colspan="5" style="text-align:right;">
                TOTAL : <?php echo $total ?>
              </td>
            </tr>
          </tfoot>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


 <div class="card">
   <div class="card-body">
     <h5 class="card-title">Catálogo de productos</h5>
     <p class="card-text">Lista de productos disponibles para la venta.
       <div class="container">
        <div class="row">
          <?php foreach ($products as $key => $value) { ?>
            <div class="col">
             <div class="card">
               <img src="<?php echo './imagenes/'.$value["img"] ?>" class="card-img-top">
               <div class="card-body">
                 <h5 class="card-title"><?php echo $value["name"].' (S/ '.$value["price"].') '?></h5>
                 <p class="card-text"><?php echo $value["description"] ?></p>
                 <a href="./add_to_cart.php?id=<?php echo $key ?>" class="btn btn-primary">Añadir</a>
               </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </p>
   </div>
 </div>
<?php
echo $footer_html
 ?>
=======
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
        <div class="container">
            <div class="row">
                <h1 class="text-center">TRABAJO SIN</h1>
            </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
>>>>>>> Stashed changes
