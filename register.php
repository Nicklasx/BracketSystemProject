<?php
    include "header.php";
    $error = 0;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['password2'];
    $email = $_POST['e-mail'];
    $phonenumber = $_POST['phonenumber'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gamertag = $_POST['gamertag'];
    $teamleader = $_POST['teamcaptain'];

    if($password != $cpassword) {
        $error = 1;
        header('Location: signupform.php?error=pw');

    }

    $sql = "SELECT * FROM `login` WHERE Username = '".$username."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $error = 1;
        header('Location: signupform.php?error=user');
    }

    $sql = "SELECT * FROM `login` WHERE `E-mail` = '".$email."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $error = 1;
        header('Location: signupform.php?error=mail');
    }

    $sql = "SELECT * FROM `login` WHERE `GamerTag` = '".$gamertag."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $error = 1;
        header('Location: signupform.php?error=tag');
    }
    if ($error != 1) {

        $sql = "INSERT INTO `login` (`Username`, `Password`, `E-mail`, `Mobil nummer`, `Fornavn`, `Efternavn`, `GamerTag`, `Holdleder`) VALUES ('".$username."','".$password."','".$email."','".$phonenumber."','".$name."','".$lastname."','".$gamertag."','".$teamleader."')";
        if ($conn->query($sql) === TRUE ) {
            $error = 1;
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        header('Location: index.php');
    }

?>