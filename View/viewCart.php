<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php'; ?>

<?php
  $results = $_SESSION['cart'];
  $totalPrice = 0;
?>
<link rel="stylesheet" href="/../Model/Styles/table.css">

<table>
  <tr>
    <td>System</td>
    <td>Quantity</td>
    <td>Price</td>
  </tr>
  <?php foreach ($results as $row => $values): ?>
    <tr>
      <td><?php echo $results[$row]['name'];?></td>
      <td><?php echo $results[$row]['quantity'];?></td>
      <td><?php echo '$' . $results[$row]['price'] . '.00';?></td>
    </tr>
    <?php $totalPrice += $results[$row]['price'];?>
  <?php endforeach; ?>
  <tr>
    <td>Total Price</td>
    <td></td>
    <td><?php echo '$' . $totalPrice . '.00';?></td>
  </tr>
</table>
<article>
  <a href="checkOut.php">Check Out</a>
</article>
