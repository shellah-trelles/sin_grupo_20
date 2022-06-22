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