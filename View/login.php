<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php';
?>

<link rel="stylesheet" href="/../Model/Styles/formStyles.css">
<form method="post" action="../Control/loginControl.php">
  <fieldset>
    <legend>Log In</legend>
    <div class="inputSection">
      <label for="loginUser">Username:</label>
      <input id="loginUser" name="loginUser" type="text">
    </div>
    <br>
    <div class="inputSection">
      <label for="loginPass">Password:</label>
      <input id="loginPass" name="loginPass" type="password">
    </div>
    <br>
    <input type="submit" value="Log In">
  </fieldset>
</form>
