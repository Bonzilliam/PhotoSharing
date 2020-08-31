<?php

$email = $_POST["email"];
$password = $_POST["password"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["number"];

#checks if user's file already exist:
$fileName = "./users/$email.txt";
$exist = file_exists($fileName);

if ($exist != true) {
    mkdir("./users/$email");
    echo "<script>window.location.href = './loggedin.php?user=$email'</script>";
}
else {
    echo "<script>alert(\"A user with this email already exist!\")</script>";
    echo "<script>localStorage.setItem('username', $email)</script>";
    echo "<script>window.location.href = './index.php'</script>";
}

#stores user's information in a text file with their email as the title:
$newData = $email . "^" . $password . "^" . $fname . "^" . $lname . "^" . $phone . "\n";
file_put_contents($fileName, $newData, FILE_APPEND);

#stores user's email in a list of users in list.txt:
$list = "./users/list.txt";
file_put_contents($list, $email . "\n", FILE_APPEND);


?>