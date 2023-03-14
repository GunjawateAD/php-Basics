<?php

$file = "example.txt";
if($handle  = fopen($file, 'r')){

   echo $content  = fread($handle,filesize($file)); //Each bytes equal to character

    fclose($handle);
}else{
    echo "The Application was not able to write on the file";
}


?>