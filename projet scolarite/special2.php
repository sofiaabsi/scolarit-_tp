<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body style="background-color:pink;">

    
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
    $conn=mysqli_connect("localhost","root","","scolarite1");
    $requete="select * from eleve";
    $resultat=mysqli_query($conn, $requete);
    ?>
        <select style="text-align: center; font-weight: bold; font-size: 15px;" class="center">
            <option value="">--Choississez un élève--</option>
        <?php
        $i=1;
        while($enre= mysqli_fetch_array($resultat))
        {
            ?>
            <option><?php echo utf8_encode($enre['nom'])?></option>
        <?php
            $i++;
        }?>
        <select>
        </select>
        <?php
            mysqli_close($conn)
            ?>
            </body>
            </html> 