<?php
    include "header.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['password2'];
    $email = $_POST['e-mail'];
    $phonenumber = $_POST['phonenumber'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gamertag = $_POST['gamertag'];

    if($password != $cpassword) {
        header('Location: signupform.php?error=pw');
    }

?>