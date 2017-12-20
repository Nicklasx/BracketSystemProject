<?php
    $line = "";
    if(isset($_POST['teamName'])) $teamName = $_POST['teamName'];
    if(isset($_POST['id1'])) $line .= $_POST['id1'];
    if(isset($_POST['id2'])) $line .= ",".$_POST['id2'];
    if(isset($_POST['id3'])) $line .= ",".$_POST['id3'];
    if(isset($_POST['id4'])) $line .= ",".$_POST['id4'];
    if(isset($_POST['id5'])) $line .= ",".$_POST['id5'];
    if(isset($_POST['id6'])) $line .= ",".$_POST['id6'];

    $sql = "SELECT * FROM `hold` WHERE `HoldNavn` = '".$teamName."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        header('Location: teamcreate.php?error=name');
    }

    $sameusercheck = explode("," , $line);

    for ($i = 0; $i < count($sameusercheck);$i++) {
        for ($j = 0; $j < count($sameusercheck);$j++) {
            if($j != $i) {
                if ($sameusercheck[$i] == $sameusercheck[$j]) {
                    header('Location: teamcreate.php?error=dup');
                }
            }
        }
    }

    $sql = "INSERT INTO `hold` (`HoldNavn`, `MedlemID`) VALUES ('".$teamName."','".$line."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: index.php');




?>