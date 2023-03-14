<?php
// $path = "C:\Users\User.IC202111\OneDrive - IcruxSystem Pvt. Ltd\Desktop\ALl Par\SQL";

// if (is_dir($path)) {
//     $files = opendir($path);

//     if ($files) {
//         while (($file_name = readdir($files)) != FALSE) {
//             if ($file_name != '.' && $file_name != '..') {
//                 echo $file_name . "<br>";
//             }
//         }
//     }
// }

$path = scandir("C:\Users\User.IC202111\OneDrive - IcruxSystem Pvt. Ltd\Desktop\ALl Par\SQL");

foreach($path as $file_name){
    if(!is_dir("C:\Users\User.IC202111\OneDrive - IcruxSystem Pvt. Ltd\Desktop\ALl Par\SQL/$file_name")){
        echo $file_name . "<br>";
     }
}
?>