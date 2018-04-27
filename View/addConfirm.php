<?php
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/Control/application_includes.php');
include '../Control/functionsLibrary.php';

//error message
$upload_message = '';

//pull in form data from post
$name = filter_input(INPUT_POST, 'romName');
$system = filter_input(INPUT_POST, 'systemSelect');
$price = filter_input(INPUT_POST, 'price');
$description = filter_input(INPUT_POST, 'description');

// Save photo to RomPhotos directory
$photoString = uploadPhotoFile("coverPhoto");
$romString = uploadRomFile("fileUpload");

//break up returned file upload information for photo
$photoArray = explode("%", $photoString);
$photo = $photoArray[0];
$photoError = $photoArray[1];
$photoMessage = $photoArray[2];

//break up returned file upload information for ROM
$romArray = explode("%", $romString);
$file = $romArray[0];
$romError = $romArray[1];
$romMessage = $romArray[2];

//set other data variables
$quantity_downloaded = 0;
$date_added = time();
if (!$_SESSION['username']) {
  $submitter = 'anonymous';
} else {
  $submitter = $_SESSION['username'];
}

if ($photoError == 1 && $romError == 1) {
  //submit sql
  $sql = "insert into products (name, system, price, description, photo, file, quantity_downloaded, submitter)
  values ('$name', '$system', '$price', '$description', '$photo', '$file', '$quantity_downloaded', '$submitter')";
  $db->query($sql);
  }
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/Model/navbar.php';  ?>

<link rel="stylesheet" href="/../Model/Styles/body.css">
<div class="addedProductDisplay">
  <?php if ($photoError != 1 || $romError != 1): ?>
    <h2>Sorry, your file upload failed! Would you like to retry or abort?</h2>
    <form>
      <input type="submit" name="retry" value="Retry">
      <input type="submit" name="abort" value="Abort">
    </form
<?php else: ?>
  <h2>Your entry, <div style="color: #fb2e01; text-shadow: 3px 3px #6fcb9f; "><?php echo $name; ?></div> ,has been successfully uploaded!</h2>
  <hr>
  <article>
    <div style="color: #fb3e01;">System:</div> <?php echo $system; ?>
    <br>
    <div style="color: #fb3e01;">Price:</div> <?php echo '$' . $price;?>
    <br>
    <div style="color: #fb3e01;">Photo Name:</div> <?php echo $_FILES['coverPhoto']['name'];?>
    <br>
    <div style="color: #fb3e01;">Rom Name:</div> <?php echo $_FILES['fileUpload']['name'];?>
    <br>
    <div style="color: #fb3e01;">Submitter:</div> <?php echo $submitter;?>
    <br>
    <div style="color: #fb3e01;">Description:</div> <?php echo $description;?>
  </article
<?php endif; ?>
</div>
