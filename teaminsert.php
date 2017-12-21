<?php
$line = "";
$counter = 0;
$decide = 0;
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
    
    $counter1 = explode(",",$row['match1']);
    $counter2 = explode(",",$row['match2']);
    $counter3 = explode(",",$row['match3']);
    $counter4 = explode(",",$row['match4']);
    if (count($counter1) < 2 ) {
        $decide = 1;
    }
    else if (count($counter2) < 2) {
        $decide = 2;
    }
    else if (count($counter3) < 2 ) {
        $decide = 3;
    }
    else if (count($counter4) < 2) {
        $decide = 4;
    }
    else {
        $decide = 1;
    }
    $line2 ="";
    if (!empty($row['match'.$decide])) {
        $line2 = $row['match'.$decide];
    }
    
}
if (empty($line2)) {
    $line2 = $_POST['nytnavn'];
}
else {
    $line2 .= ",".$_POST['nytnavn'];
}

$sql = "UPDATE `tournering` SET `match".$decide."`='".$line2."' WHERE ID = '".$id."'";
if ($conn->query($sql) === TRUE ) {
    $error = 1;
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: index.php');
?>


<?php
include "footer.php";
?>