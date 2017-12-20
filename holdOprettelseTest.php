<?php
include "header.php";
?>

<h1>Test</h1>

<div class="box">
	<div class="secondBox">
<h2>Create team:</h2>
<form action="register.php" method="POST">
    Team name: <br><input type="text" name="teamName" required> <br><br>
    Team member id: <br><input type="text" name="id" required> <br>
    Team member id: <br><input type="text" name="id" required> <br>
    Team member id: <br><input type="text" name="id" required> <br>
    Team member id: <br><input type="text" name="id" required> <br>
    Team member id: <br><input type="text" name="id" required> <br>
    Team member id: <br><input type="text" name="id" required> <br>
</form>

<button type="submit" value="Create">Create</button>
<button type="submit" value="Cancel">Cancel</button>

<?php
include "footer.php";
?>