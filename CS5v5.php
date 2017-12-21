<?php
include "header.php";
$line = "";

$sql = "SELECT * FROM `hold` WHERE `MedlemID` LIKE '%".$_SESSION['id']."%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$checkForUser = explode("," , $row['MedlemID']);
	foreach ($checkForUser as $value) {
		if($value == $_SESSION['id']) {

		}
	}
}
?>

<h1>CS5v5</h1>

<div class="box">

		<div class="tilmeld">
			<h4>Join turnament</h4>
			
<select name="teamcaptain">
                <option value=""></option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

			<input type="submit" value="Join with team">
		</div>

		<div class="b1">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
		Team Name: <input type='text' name='TeamName'>
	</div>
<br>
		<div class="b2">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b3">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b4">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b5">Semifinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b6">Semifinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b7">Final<br>
			Team Name: <input type='text' name='TeamName'><br>
		Team Name: <input type='text' name='TeamName'>
	</div>

</div>

<?php
include "footer.php";
?>