<?php
include "header.php";
$line = "";
$sql = "SELECT * FROM tournering";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$line .= "<div><a href='CS5v5.php?id=".$row['ID']."'>".$row['turneringnavn']."</a></div><br>";
}
?>

<h1>Tournaments</h1>

<div class="box">
<div class="secondbox">

	<?php echo $line; ?>


</div>
</div>

<?php
include "footer.php";
?>