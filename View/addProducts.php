<?php include '../Model/navbar.php'?>
<link rel="stylesheet" href="/../Model/Styles/formStyles.css">

<form enctype="multipart/form-data" method="post" action="addConfirm.php">
    <fieldset>
      <legend>Add Products</legend>
        <div class="inputSection">
          <label for="romName">Rom Name</label>
          <input id="romName" name="romName" type="text" maxlength="255"/>
        </div>
        <br>
        <div class="inputSection">
          <label for="systemSelect">System</label>
          <select id="systemSelect" name="systemSelect">
              <option value="gba">GBA</option>
              <option value="playstation">Playstation</option>
              <option value="nes">NES</option>
          </select>
        </div>
        <br>
        <div class="inputSection">
          <label for="price">Price</label>
          <input id="price" name="price" type="text" value=""/>
        </div>
        <br>
        <div class="inputSection">
          <label for="coverPhoto">Cover Photo</label>
          <input id="coverPhoto" name="coverPhoto" type="file" enctype="multipart/form-data">
        </div>
        <br>
        <div class="inputSection">
          <label for="fileUpload">Rom Zip</label>
          <input id="fileUpload" name="fileUpload" type="file" enctype="multipart/form-data">
        </div>
        <br>
        <div class="inputSection">
          <label for="description">Description</label>
          <textarea id="description" name="description"></textarea>
        </div>
        <input type="submit" value="Save">
    </fieldset>
</form>
