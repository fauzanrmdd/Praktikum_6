<?php

$valid_username = "admin123";
$valid_password = "admin123";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password){
    echo "Selamat datang, $username!";
} else {
    echo "Kamu telah gagal login";
}

?>