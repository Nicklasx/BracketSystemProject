<?php
include "header.php";
$line = "";
if(isset($_GET['error'])) {
    if ($_GET['error'] == "pw") {
        $line .= "Passwords do not match";
    }
    else if ($_GET['error'] == "user") {
        $line .= "Username already taken";
    }
    else if ($_GET['error'] == "mail") {
        $line .= "Email is already in use";
    }
    else if ($_GET['error'] == "tag") {
        $line .= "GamerTag is already in use";
    }
}
?>

<h1>Test</h1>

<div class="box">
    <div class="secondBox">
        <h2>Signup Details:</h2>
        <form action="register.php" method="POST">
            Username: <br><input type="text" name="username" required> <br>
            Password: <br><input type="password" name="password" required> <br>
            Confirm Password: <br><input type="password" name="password2" required> <br>
            E-mail: <br><input type="text" name="e-mail" required> <br>
            phone number: <br><input type="text" name="phonenumber" required> <br>
            name: <br><input type="text" name="name" required> <br>
            last name: <br><input type="text" name="lastname" required> <br>
            GamerTag: <br><input type="text" name="gamertag" required> <br>

            <h4>Team Captain?</h4>
            <select name="teamcaptain">
                <option value=""></option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <input type="submit" value="Register">
        </form>

        <form action="index.php" method="POST">
            <input type="submit" value="Cancel">
        </form>
        <?php echo $line; ?>
    </div>
</div>


<?php

include "footer.php";
?>