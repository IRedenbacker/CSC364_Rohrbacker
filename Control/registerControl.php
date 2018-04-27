<?php require($_SERVER[ 'DOCUMENT_ROOT' ] . '/Control/application_includes.php'); ?>

<?php
//pull data from post
$email = filter_input(INPUT_POST, 'email');
$confirmEmail = filter_input(INPUT_POST, 'emailConfirm');
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'passwordConfirm');
$confirm = filter_input(INPUT_POST, 'acceptBox');
$saveAction = filter_input(INPUT_POST, 'confirm');
$message ="";
$action = $_SERVER['DOCUMENT_ROOT'] . '/View/register.php';

$emailSQL = 'SELECT count(*) FROM `customers` WHERE `email` = "' . $email . '"';
$result = $db->query($emailSQL);
$resultArray = $result->fetchAll();

//test email, password, and terms agreement
if ($email != $confirmEmail) {
  $message = "Error: Emails do not match.";
  include $_SERVER['DOCUMENT_ROOT'] . '/View/register.php';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $message = "Error: Please enter a valid email address.";
  include $_SERVER['DOCUMENT_ROOT'] . '/View/register.php';
} elseif ($password != $confirmPassword) {
  $message = "Error: Passwords do not match.";
  include $_SERVER['DOCUMENT_ROOT'] . '/View/register.php';
} elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/", $password)) {
  $message = "Error: Password must be 8-16 characters, contain a capital letter, and a number.";
  include $_SERVER['DOCUMENT_ROOT'] . '/View/register.php';
} elseif (!$confirm) {
  $message = "Error: Please agree to the terms of agreement.";
  include $_SERVER['DOCUMENT_ROOT'] . '/View/register.php';
} else {
  include $_SERVER['DOCUMENT_ROOT'] . '/View/registerConfirm.php';
}
?>
<h3><?php echo $message; ?></h3>
