<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php';?>

<?php

?>
<link rel="stylesheet" href="/../Model/Styles/formStyles.css">

<form method="post" action="final.php">
  <fieldset>
    <legend>Payment Information</legend>
    <label for="creditCard" maxlength="255">Credit Card Number:</label>
    <input type="text" name="creditCard">
    <br>
    <label for="date">Exp. Date</label>
    <input type="date" name="date">
    <input type="submit" value="placeOrder">
</form>
