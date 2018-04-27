<?php require($_SERVER[ 'DOCUMENT_ROOT' ] . '/Control/application_includes.php'); ?>
<

<?php
  $confirm = filter_input(INPUT_GET, 'confirm');

  $username = filter_input(INPUT_POST, 'username');
  $email = filter_input(INPUT_POST, 'email');
  $firstName = filter_input(INPUT_POST, 'first_name');
  $lastName = filter_input(INPUT_POST, 'last_name');
  $password = filter_input(INPUT_POST, 'password');
  $phone = filter_input(INPUT_POST, 'phone');
?>


<?php if ($confirm == 'Confirm'): ?>
  <h2>Congratulations, <div style="color: #fb2e01; text-shadow: 3px 3px #6fcb9f;"><?php echo $username?></div>Your account has been successfully created!</h2>
  <hr>
  <article>
    <h3>View Products?</h3>
    <a href="../View/viewProducts.php">Heck ya!</a><a href="../View/addProducts.php">I'll upload my own!</a>
  </article>
  <?php
    $accountSQL = "insert into customers (username, first_name, last_name, email, password, phone)
    values ('$username', '$firstName', '$lastName', '$email', '$password', '$phone')";
    $db->query($accountSQL);
  ?>
<?php endif; ?>
