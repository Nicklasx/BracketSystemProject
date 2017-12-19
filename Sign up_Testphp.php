<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="Test.css">

	<title></title>

</head>

<body>

    <h1>Test</h1>

<div class="box">
<div class="secondBox">
	<h2>Sign in:</h2>
<form action="register.php" method="POST">
    Username: <br><input type="text" name="username" required> <br><br>
    Password: <br><input type="password" name="password" required> <br><br>
    Confirm Password: <br><input type="password" name="password2" required> <br><br>
    E-mail: <br><input type="text" name="e-mail" required> <br><br>
    Mobilnummer: <br><input type="text" name="Mobilnummer" required> <br><br>
    Fornavn: <br><input type="text" name="Fornavn" required> <br><br>
    Efternavn: <br><input type="text" name="Efternavn" required> <br><br>
    GamerTag: <br><input type="text" name="GamerTag" required> <br><br>

    <h4>Holdleder?</h4>
    <select>
    	<option value=""></option>
    	<option value="ja">Ja</option>
    	<option value="nej">Nej</option>
    </select>
    <input type="submit" value="Register">
</form>
</div>
</div>

</body>

</html>