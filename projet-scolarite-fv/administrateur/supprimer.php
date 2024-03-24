<?php
session_start();
?>
<html>
<body>
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
    $a=$_POST["num"];

    $reql="DELETE from eleve WHERE num= $a";
    $rl= mysqli_query($conn, $reql);

    echo "<center><p> Supprimer</p></center>";
    echo '<center><a href="page1.php">Retour</a></center>';

   
    header("Refresh:2; url=page1.php");



?>
</body>
</html>
