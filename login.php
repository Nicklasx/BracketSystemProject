<?php
include "header.php";

$username = $_POST['username'];
$password = $_POST['password'];
$error = 0;

$sql = "SELECT * FROM `login` WHERE `Username` = '".$username."'";

$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($password == $row['Password']) {
            $_SESSION['username'] = $username;
            $error = 1;
            break;
        }
    }
}





if(!isset($_SESSION['username'])) {
    header('Location: index.php?error='.$error);
}

else {
    header('Location: index.php');
}

?> 