<?php

$randomNum = rand(100000, 999999);
mkdir("upload/$randomNum/");

if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
 $target_dir = "upload/$randomNum/";
 $file = $_FILES['my_file']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['my_file']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
    echo "<script>alert('an error occured, please try again later.')</script>";
}
else{
    move_uploaded_file($temp_name,$path_filename_ext);
    echo "<script>window.location = '$path_filename_ext'</script>";
    echo "<script>alert('Share your image by sharing this page's URL, only people you send this to can view your image.');</script>";
}
}

//https://www.allphptricks.com/upload-file-using-php-save-directory/
?>