<?php
    include "header.php";
    $line = "";
    $error = 0;

    if(isset($_POST['teamName'])) $teamName = $_POST['teamName'];
    if(isset($_POST['id1'])) $line .= $_POST['id1'];
    if(!empty($_POST['id2'])) $line .= ",".$_POST['id2'];
    if(!empty($_POST['id3'])) $line .= ",".$_POST['id3'];
    if(!empty($_POST['id4'])) $line .= ",".$_POST['id4'];
    if(!empty($_POST['id5'])) $line .= ",".$_POST['id5'];
    if(!empty($_POST['id6'])) $line .= ",".$_POST['id6'];

    $sql = "SELECT * FROM `hold` WHERE `HoldNavn` = '".$teamName."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $error = 1;
        header('Location: holdOprettelseTest.php?error=name');
    }

    $sameusercheck = explode("," , $line);

    for ($i = 0; $i < count($sameusercheck);$i++) {

        $sql = "SELECT * FROM `login` WHERE `ID` = '".$_POST["id".$i]."'";
        $result = $conn->query($sql);
        if($result->num_rows < 1) {
            header('Location: holdOprettelseTest.php?error=nous');
            $error = 1;
        }


        for ($j = 0; $j < count($sameusercheck);$j++) {
            if($j != $i) {
                if ($sameusercheck[$i] == $sameusercheck[$j]) {
                    header('Location: holdOprettelseTest.php?error=dup');
                    $error = 1;
                }
            }
        }
    }

    if ($error != 1) {

    $sql = "INSERT INTO `hold` (`HoldNavn`, `MedlemID`) VALUES ('".$teamName."','".$line."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: index.php');
}



?>