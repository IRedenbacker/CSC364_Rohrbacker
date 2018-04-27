<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php'; ?>

<?php
  $productToCart = filter_input(INPUT_POST,'addToCartButton');

  $cartObjectSQL = "SELECT * From `products` WHERE id=$productToCart;";
  $result = $db->query($cartObjectSQL);
  $resultArray = $result->fetchAll();

  $name = $resultArray[0]['name'];
  $system = $resultArray[0]['system'];
  $price = $resultArray[0]['price'];
  $photoDir = '../Namespace/RomPhotos/' .  $resultArray[0]['photo'];
  $description = $resultArray[0]['description'];
  $date_added = $resultArray[0]['date_added'];
  $submitter = $resultArray[0]['submitter'];

  if (isset($_SESSION['username']))
  {
    if (isset($_SESSION['cart']))
    {
      //$cart = array();
      $results = $_SESSION['cart'];
      $cart['uid'] = $productToCart;
      $cart['name'] = $name;
      $cart['price'] = $price;
      $boolCheck;
      foreach ($results as $row => $values)
      {
        if ($values['uid'] == $cart['uid'])
        {
          $results[$row]['quantity']++;
          $boolCheck = true;
          break;
        }
        else
        {
          //echo " else ";
          $boolCheck = false;
        }
      }
      if ($boolCheck == false)
      {
        $cart['quantity'] = 1;
        $results[] = $cart;
      }
      $_SESSION['cart'] = $results;
    }
    else
    {
      $cart = [];
      $cart['uid'] = $productToCart;
      $cart['name'] = $name;
      $cart['price'] = $price;
      $cart['quantity'] = 1;
      //if ()
      $_SESSION['cart'][] = $cart;
    }

  }

?>
<h1><div style="color: #fb2e01; text-shadow: 3px 3px #6fcb9f; "><?php echo $name; ?> </div>successfully added to cart!</h1>
<article>
  <a href="../View/viewProducts.php">Keep Shopping</a> <a href="../View/viewCart.php">Check Out</a>
</article>
