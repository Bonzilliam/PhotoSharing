<?php

include("top.php");

$email = $_POST["email"];
$password = $_POST["password"];

$exist = file_exists("./users/$email.txt");

//If the user's file exist and password is correct
if ($exist == true) {
    $user = file_get_contents("./users/$email.txt");
    $infoArray = explode('^',$user,5);
    $realPassword = $infoArray[1];
    if ($password == $realPassword) {
        echo "<script>window.location.href = './loggedin.php?user=$email'</script>";
    }
    else {
        echo "<script>alert(\"error: email or password is incorrect!\")</script>";
        echo "<script>window.location.href = './index.php'</script>";
    }
}
else {
    echo "<script>alert(\"error: email is incorrect!\")</script>";
    echo "<script>window.location.href = './index.php'</script>";
}

include("bottom.php");
?>
