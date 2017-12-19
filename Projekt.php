<?php 
include "header.php";
?>
	<h1>Projekt</h1>


  <h2>Login:</h2>
<form action="login.php" method="POST">
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <input type="submit" value="Login">
</form>

<?php
include "footer.php";
?>