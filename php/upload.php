
<?php session_start(); ?>
<?php


if($_SESSION['login'] == '1' && $_SESSION['sec_code'] == '2244' && $_SESSION['define'] == "osama@2244" && $_SESSION['up'] = '1'){
 

  $file_name =  $_FILES['file']['name'];
  $tmp_name = $_FILES['file']['tmp_name'];
  $file_up_name = $file_name;
  move_uploaded_file($tmp_name, "files/".$file_up_name);

}else{

  header("Location:../../index.php");
}




?>
