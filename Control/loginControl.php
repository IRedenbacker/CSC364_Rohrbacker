<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php';
?>

<?php
  if (isset($_POST['loginUser']) and isset($_POST['loginPass'])) {
    $username = $_POST['loginUser'];
    $password = $_POST['loginPass'];

    $loginSQL = "SELECT * FROM `customers` WHERE username='$username' and password='$password' ";

    $result = $db->query($loginSQL);
    $resultArray = $result->fetchAll();

    if (count($resultArray) > 0) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
    }
  }
?>

<h1>Welcome <div style="color: #fb2e01; text-shadow: 3px 3px #6fcb9f; "><?php echo $_SESSION['username']; ?></div></h1>
<article>
  <a href="../View/viewProducts.php">Start Shopping</a> <a href="../View/addProducts.php">Sell Product</a>
</article>
