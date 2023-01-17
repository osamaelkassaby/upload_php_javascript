<?php 
$path = __DIR__;
if($fh = opendir($path)){
    while(($entry = readdir($fh)) !== FALSE){
        if($entry != "." && $entry != ".."){
            echo $entry . "<br>";
            $thisentry = $path . DIRECTORY_SEPARATOR . $entry;
            echo is_dir($thisentry) ? "FOLDER":"<img src='download.png'>" ;
        }
    }
}



?>