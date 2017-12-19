<?php

include "header.php";

$_SESSION['username'] = '';

$username = $_POST['username'];
$password = md5($_POST['password']);


$sql = "SELECT * FROM `login` WHERE `Username` = '".$username."'";

$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($password == $row['password']) {
            $_SESSION['username'] = $username;
            break;
    }
    if ($_SESSION['username'] == '') {
        header('Location: index.php?error=yes');
    }
}

else {
    header('Location: index.php?error=yes');
}

if ($_SESSION['username'] != '') {
    header('Location: index.php');
}

?> 