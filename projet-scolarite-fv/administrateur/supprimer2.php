<?php
session_start();
?>
   
<html>
<div class= div1>
    <?php 
    echo "<center> Vous etes connecte ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
    ?>
    </div>
    
<style>
   
    .div1 {
      position: absolute;
      top: 10px; 
      right: 10px; 
      background-color: #f2f2f2;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
</style>
    <?php
    @include("connexion.php");
    $code=$_GET['num'];
    $rql="delete from eleve where num='$code'";
    mysqli_query($conn,$rql);

    header('location:special-.php');
    exit;
    
    mysqli_close($conn);
    ?>
    </html>