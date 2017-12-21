<?php 
session_start();
include "sqlconn.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="media/style.css">
</head>

<body>

<ul class="topnav">
  <li><a href="index.php">Home</a></li>
  <li><a href="tournaments.php">Tournaments</a></li>
  <li><a href="holdOprettelseTest.php">Create Team</a></li>
  <li><a href="Matches.php">Matches</a></li>
  <li><a href="">About</a></li>
  <li><a href="Profilpage_php.php">Profile</a></li>
  <li><a href="myteam.php">My Team</a></li>

<form action='login.php' method='POST'>
<input type='text' name='username' required>
<input type='password' name='password' required>
<input type='submit' value='login'>
</form>

<form action='signupform.php' method='POST'>
<input type='submit' value='Sign up'>
</form>

<form action='logout.php' method='POST'>
<input type='submit' value='logout'>
</form>
</ul>