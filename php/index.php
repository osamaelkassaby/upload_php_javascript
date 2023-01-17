<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Files </title>
</head>
<body>
<?php 
$path = __DIR__ ."/files";
if($fh = opendir($path)){
    while(($entry = readdir($fh)) !== FALSE){
        if($entry != "." && $entry != ".."){
            $thisentry = $path . DIRECTORY_SEPARATOR . $entry;
            echo is_dir($thisentry) ? "
             <a href='files/$entry/'>
             <img class='a-img' src='folder.png' /> </a>
             <br>
             <a class='a-link' href='files/$entry/'> $entry</a>":"
             <br>
             <a class='a-img' href='files/". $entry . "'download> <img class='a-img' src='file.png'". $entry."</a>
             <br>
             <a class='a-link' href='files/". $entry . "'download> $entry </a>" ." 
            <br>
            
            " ;
            echo "<br>";
        }
    }
}



?>

</body>
<!-- <a class='a-link' href='files/". $entry . "'download>". $entry."</a> -->
</html>
