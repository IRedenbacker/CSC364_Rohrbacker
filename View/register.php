<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php'; ?>

<link rel="stylesheet" href="/../Model/Styles/formStyles.css">

<form enctype="multipart/form-data" method="post" action="/../Control/registerControl.php">
  <fieldset>
    <legend>Register a New Account</legend>
    <div class="inputSection">
      <label for="username">Username</label>
      <input id="username" name="username" type="text" maxlength="255" />
    </div>
    <br>
    <div class="inputSection">
      <label for="first_name">First Name:</label>
      <input id="first_name" name="first_name" type="text" maxlength="255" />
    </div>
    <br>
    <div class="inputSection">
      <label for="last_name">Last Name:</label>
      <input id="last_name" name="last_name" type="text" maxlength="255" />
    </div>
    <br>
    <div class="inputSection">
      <label for="email">Email:</label>
      <input id="email" name="email" type="email" />
    </div>
    <br>
    <div class="inputSection">
      <label for="emailConfirm">Confirm Email:</label>
      <input id="emailConfirm" name="emailConfirm" type="email" />
    </div>
    <br>
    <div class="inputSection">
      <label for="password">Password:</label>
      <input id="password" name="password" type="password" />
    </div>
    <br>
    <div class="inputSection">
      <label for="passwordConfirm">Confirm Password:</label>
      <input id="passwordConfirm" name="passwordConfirm" type="password" />
    </div>
    <br>
    <div class="inputSection">
      <label for="phone">Phone Number:</label>
      <input id="phone" name="phone" type="phone" />
    </div>
    <div class="inputSection">
      <input id="acceptBox" name="acceptBox" type="checkbox"/>I agree to the <a href="/../Model/terms.php">terms of service</a>
    </div>
    <input value="Register" type="submit"/>

</form>
