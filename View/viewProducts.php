<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php';?>


<?php
  $productsSql = "SELECT * from `products`";
  $result = $db->query($productsSql);
  $resultArray = $result->fetchAll();
  $count = 0;
?>
<link rel="stylesheet" href="/../Model/Styles/body.css">

<table>
  <?php for ($i = 0; $i < 5; $i++): ?>
    <tr>
      <?php for ($j = 0; $j < 3; $j++): ?>
        <td>
          <?php if ($count < count($resultArray)): ?>
            <img src="<?php echo '../Namespace/RomPhotos/' . $resultArray[$count]['photo']; ?>">
            <form method="post" action="shopProduct.php">
              <h3><?php echo $resultArray[$count]['name'];?></h3>
              <button type="submit" name="productView" value="<?php echo $resultArray[$count]['id'];?>">View Me!</button>
            </form>
            <?php $count += 1;?>
          <?php endif;?>
        </td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>
