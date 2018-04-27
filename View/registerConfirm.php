<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php'; ?>

<?php
$username = filter_input(INPUT_POST, 'username');
$firstName = filter_input(INPUT_POST, 'first_name');
$lastName = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$phone = filter_input(INPUT_POST, 'phone');

$accountSQL = "insert into customers (username, first_name, last_name, email, password, phone)
values ('$username', '$firstName', '$lastName', '$email', '$password', '$phone')";
$db->query($accountSQL);

?>

<h2>Congratulations, <div style="color: #fb2e01; text-shadow: 3px 3px #6fcb9f;"><?php echo $username?></div>Your account has been successfully created!</h2>
<hr>
<article>
  <h3></h3>
  <div style="color: #fb3e01;">Username: </div><?php echo $username;?>
  <div style="color: #fb3e01;">First Name: </div><?php echo $firstName;?>
  <div style="color: #fb3e01;">Last Name: </div><?php echo $lastName;?>
  <div style="color: #fb3e01;">Email: </div><?php echo $email;?>
  <div style="color: #fb3e01;">Phone Number: </div><?php echo $phone;?>
  <div>
    <a href="../Vew/index.php">Return Home</a> <a href="../View/viewProducts.php">View Products</a>
  </div>
</article>
