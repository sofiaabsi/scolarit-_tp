<?php
session_start();
?>
<?php 
session_start();

session_destroy();
header('location:../index.html');


echo " Bienvenu " . $_SESSION["log"] . " " . $_SESSION["mdp"] . "</center>";
?>