<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="style.css">

	<title></title>

</head>

<body>

    <h1>Test</h1>

<div class="box">
<div class="secondBox">
	<h2>Sign up:</h2>
<form action="register.php" method="POST">
    Username: <br><input type="text" name="username" required> <br><br>
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
    <input type="submit" value="Cancel">

</form>
</div>
</div>

</body>

</html>