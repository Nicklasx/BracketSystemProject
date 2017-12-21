<?php
include "header.php";
$line = "";
$team1 = "";
$team2 = "";
$team3 = "";
$team4 = "";
$team5 = "";
$team6 = "";
$team7 = "";
$team8 = "";


if (isset($_SESSION['id'])) {
	$sql = "SELECT * FROM `hold`";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {

		$checkForUser = explode("," , $row['MedlemID']);
		foreach ($checkForUser as $value) {
			if($value == $_SESSION['id']) {
				$line.="<option value='".$row['HoldNavn']."'>".$row['HoldNavn']."</option>";
			}
		}
	}
}

$id = $_GET['id'];

$sql = "SELECT * FROM `tournering` WHERE `ID` = '".$_GET['id']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	if(!empty($row['match1'])) {
		$match1 = explode(",",$row['match1']);
	}
	if(!empty($row['match2'])) {
		$match2 = explode(",",$row['match2']);
	}
	if(!empty($row['match3'])) {
		$match3 = explode(",",$row['match3']);
	}
	if(!empty($row['match4'])) {
		$match4 = explode(",",$row['match4']);
	}
}

if (!empty($match1[0])) {
	$team1 = $match1[0];
}
if (!empty($match1[1])) {
	$team2 = $match1[1];
}
if (!empty($match2[0])) {
	$team3 = $match2[0];
}
if (!empty($match2[1])) {
	$team4 = $match2[1];
}
if (!empty($match3[0])) {
	$team5 = $match3[0];
}
if (!empty($match3[1])) {
	$team6 = $match3[1];
}
if (!empty($match4[0])) {
	$team7 = $match4[0];
}
if (!empty($match4[1])) {
	$team8 = $match4[1];
}

?>

<h1>CS5v5</h1>

<div class="box">

		<div class="tilmeld">
			<h4>Join turnament</h4>
			<form action="teaminsert.php?id=<?php echo $id;?>" method="POST">
				<select name="nytnavn">                
                <?php echo $line; ?>
            	</select>

			<input type="submit" value="Join with team">
			</form>
		</div>

		<div class="b1">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team1; ?>"><br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team2; ?>">
	</div>
<br>
		<div class="b2">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team3; ?>"><br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team4; ?>">
	</div>
<br>
		<div class="b3">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team5; ?>"><br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team6; ?>">
</div>
<br>
		<div class="b4">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team7; ?>"><br>
		Team Name: <input type='text' name='TeamName' readonly value="<?php echo $team8; ?>">
</div>
<br>
		<div class="b5">Semifinal<br>
		Team Name: <input type='text' name='TeamName' readonly><br>
	Team Name: <input type='text' name='TeamName' readonly>
</div>
<br>
		<div class="b6">Semifinal<br>
		Team Name: <input type='text' name='TeamName' readonly><br>
		Team Name: <input type='text' name='TeamName' readonly>
</div>
<br>
		<div class="b7">Final<br>
			Team Name: <input type='text' name='TeamName' readonly><br>
		Team Name: <input type='text' name='TeamName' readonly>
	</div>

</div>

<?php
include "footer.php";
?>