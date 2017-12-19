<?php
include "header.php";
$line = "";
if(isset($_GET['error'])) {
    if ($_GET['error'] == "pw") {
        $line .= "Passwords do not match";
    }
}
?>

<h2>Signup Details:</h2>
<form action="register.php" method="POST">
    Username: <br><input type="text" name="username" required> <br>
    Password: <br><input type="password" name="password" required> <br>
    Confirm Password: <br><input type="password" name="password2" required> <br>
    E-mail: <br><input type="text" name="e-mail" required> <br>
    phone number: <br><input type="text" name="Mobilnummer" required> <br>
    name: <br><input type="text" name="name" required> <br>
    last name: <br><input type="text" name="lastname" required> <br>
    GamerTag: <br><input type="text" name="gamertag" required> <br>
    <input type="submit" value="Register">
</form>
<form action="index.php" method="POST">
    <input type="submit" value="Cancel">
</form>

<?php
echo $line;
include "footer.php";
?>