
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php';?>


<?php
  $viewedProduct = filter_input(INPUT_POST,'productView');

  $viewSQL = "SELECT * From `products` WHERE id=$viewedProduct;";
  $result = $db->query($viewSQL);
  $resultArray = $result->fetchAll();

  $name = $resultArray[0]['name'];
  $system = $resultArray[0]['system'];
  $price = $resultArray[0]['price'];
  $photoDir = '../Namespace/RomPhotos/' .  $resultArray[0]['photo'];
  $description = $resultArray[0]['description'];
  $date_added = $resultArray[0]['date_added'];
  $submitter = $resultArray[0]['submitter'];
?>
<link rel="stylesheet" href="/../Model/Styles/body.css">
<link rel="stylesheet" href="/../Model/Styles/formStyles.php">

<h3 style="color: #fb2e01; text-shadow: 3px 3px #6fcb9f; "><?php echo $name;?></h3>
<div class="productBody">
  <div id="productImage">
    <img src="<?php echo $photoDir;?>">
  </div>
  <div id="productInfo">
    <div style="color: #fb3e01;">System:</div> <?php echo $system; ?>
    <br>
    <div style="color: #fb3e01;">Price:</div> <?php echo $price; ?>
    <br>
    <div style="color: #fb3e01;">Date Added:</div> <?php echo $date_added; ?>
    <br>
    <div style="color: #fb3e01;">Submitter:</div> <?php echo $submitter; ?>
    <br>
    <div style="color: #fb3e01;">Description:</div> <?php echo $description; ?>
  </div>
  <div id="addCartForm">
    <form method="post" action="addedToCart.php">
      <button type="submit" name="addToCartButton" value="<?php echo $viewedProduct; ?>">Add to Cart</button>
    </form>
  </div>
</div>
