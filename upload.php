
<?php session_start(); ?>


<?php 
if($_SESSION['login'] == '1' && $_SESSION['sec_code'] == '2244' && $_SESSION['define'] == "osama@2244"){
  $_SESSION['up'] = '1';
}else{
  $_SESSION['up'] = '0';
  header("Location:index.php");
}

?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload </title>
  <link rel="icon" href="cloud.png" type="image/png" sizes="20x20">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="logo"> <p> O <span class='e'>E</span>  <span class='cloud'> Cloud </span> </p> </div>
<div class="files">
<a href="php/"> <img src="folder.png" alt=""> </a>

</div> 
<div class="wrapper">
    <header>File Uploader Server OE</header>


    <form action="#">

      <input class="file-input" type="file" name="file" hidden>
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Browse File to Upload</p>
    </form>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
  </div>

  <script src="script.js"></script>

</body>
</html>
