<?php
  //check file type script
  function getFileType($file) {
    $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    return $imageFileType;
  }

  //check if file already exists
  function checkExists($file) {
    $message = "";
    if (file_exists($file)) {
      return 0;
    } else {
      return 1;
    }
  }

  //test upload file size is less than 100mb
  function checkFileSize($file) {
    if ($_FILES[$file]["size"] > 100000000) {
      return 0;
    } else {
      return 1;
    }
  }

  //upload file
  function uploadPhotoFile($file) {
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/Namespace/RomPhotos/';
    $target_file = $target_dir . basename($_FILES[$file]["name"]);
    $filename = basename($_FILES[$file]["name"]);
    $uploadOk = 1;
    $message = "";
    $imageFileType = getFileType($target_file);
    //error checking
    if (checkExists($target_file) == 0) {
      $message = "Sorry, your file already exists.";
      $uploadOk = 0;
    }
    if (checkFileSize($file) == 0) {
      $message = "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if (getFileType($target_file) != "jpg" && getFileType($target_file) != "png" && getFileType($target_file) != "jpeg") {
      $message = "Sorry, only JPG, JPEG, and PNG files are supported.";
      $uploadOk = 0;
    }
    //check uploadOk for error 0, else upload file
    if ($uploadOk == 0) {
      $message = "Your file upload failed.";
    } else {
      if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
        $message = "The file " . basename($_FILES[$file]["name"]) . " has been uploaed.";
      } else {
        $message = "Sorry, there was an error uploading your file.";
      }
    }
    return $filename . "%" . $uploadOk . "%" . $message;
  }

  //upload Rom
  function uploadRomFile($file) {
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/Namespace/Roms/';
    $target_file = $target_dir . basename($_FILES[$file]["name"]);
    $filename = basename($_FILES[$file]["name"]);
    $uploadOk = 1;
    $message = "";
    $imageFileType = getFileType($target_file);
    //error checking
    if (checkExists($target_file) == 0) {
      $message = "Sorry, your file already exists.";
      $uploadOk = 0;
    }
    if (checkFileSize($file) == 0) {
      $message = "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if (getFileType($target_file) != "zip" && getFileType($target_file) != "7z") {
      $message = "Sorry, only zip files are supported.";
      $uploadOk = 0;
    }
    //check uploadOk for error 0, else upload file
    if($uploadOk == 0) {
      $message = "Your file upload failed.";
    } else {
      if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
        $message = "The file " . basename($_FILES[$file]["name"]) . " has been uploaded.";
      } else {
        $message = "Sorry, there was an error uploading your file.";
      }
    }
    return $filename . "%" . $uploadOk . "%" . $message;
  }
 ?>
