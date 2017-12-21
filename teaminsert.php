<?php
$line = "";
$counter = 0;
include "header.php";

$sql = "SELECT * FROM `hold` where `HoldNavn` = '".$_POST['nytnavn']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $teamid = $row['ID'];
}


$sql = "SELECT * FROM `tournering` WHERE `ID` = '".$_GET['id']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $line = $row['HoldID'];
}


if(!empty($line)) {
$line .= ",".$teamid;
}
else {
    $line .= $teamid;
}

$id = $_GET['id'];
$sql = "UPDATE `tournering` SET `HoldID`='".$line."' WHERE ID = '".$id."'";
if ($conn->query($sql) === TRUE ) {
    $error = 1;
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM `tournering` WHERE `ID` = '".$_GET['id']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $counter++;
}
?>


<?php
include "footer.php";
?>