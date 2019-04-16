<?php require 'inc/head.php'; ?>
<?php session_start(); 

$products = [32 => 'M&M\'s&copy; cookies', 36 => 'Chocolate chips', 46 => 'Pecan nuts', 58 => 'Chocolate cookie'];

?>
<section class="cookies container">
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>Produits</th>
        <th>Description</th>
        <th>Quantité</th>
      </tr>

      <?php
        if (!empty($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $id => $quantity)
        { 
      ?>
      <tr>
        <td><img class="img-responsive" src="assets/img/product-<?php echo $id ?>.jpg"
            alt=<?php echo $products[$id]; ?>></td>
        <td><?php echo $products[$id]; ?></td>
        <td><?php echo $quantity; ?></td>
      </tr>
      <?php } ?>
      <?php } ?>
    </table>
  </div>
</section>
<?php require 'inc/foot.php'; ?>