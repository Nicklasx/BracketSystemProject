<?php
include "header.php"
?>

<h1>Test</h1>

<div class="box">
	<div class="secondBox">
<h2>Create Tournament:</h2>
<form action="teamregister.php" method="POST">
    Tournament name: <br><input type="text" name="teamName" required> <br><br>
    Game: <br><input type="text" name="id1" required> <br><br>
    Details: <br><input type="text" name="id2"> <br><br>
    Start Date: <br><input type="text" name="id3"> <br><br>
    End Date: <br><input type="text" name="id4"> <br><br>
    Registration Time: <br><input type="text" name="id5"> <br><br>

    <button type="submit" value="Create">Create</button>
    <button type="submit" value="Cancel">Cancel</button>
</form>

<?php
include "footer.php"
?>