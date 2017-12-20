<?php
$line = "";
include "header.php";
if(isset($_GET['error'])) {
    $error = $_GET['error'];
}

if (!isset($_SESSION['username'])) {
    $line .= "<div class='box'>";
    $line .= "<div class='secondBox'>";
    $line .= "<h2>Login:</h2>";
    $line .= "<form action='login.php' method='POST'>";
    $line .= "<input type='text' name='username' required>";
    $line .= "<input type='password' name='password' required>";
    $line .= "<input type='submit' value='login'>";
    $line .= "</form>";
    $line .= "<form action='signupform.php' method='POST'>";
    $line .= "<input type='submit' value='Sign up'>";
    $line .= "</form>";
    $line .= "</div></div>";
}
else{
    $line .= "<form action='logout.php' method='POST'>";
    $line .= "<input type='submit' value='logout'>";
    $line .= "</form>";
}

?>

<h1>Projekt</h1>

    <?php echo $line;?>



<?php 
include "footer.php";
?>