<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
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
    $conn=mysqli_connect("localhost","root","","scolarite1");
    $requete="select * from eleve";
    $resultat=mysqli_query($conn, $requete);
    ?>
             <center>Liste des élèves 2</center>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
        ?>
        <br>   
        <?php echo $enreg["num"];?>,
        <?php echo $enreg["nom"];?> ,
        <?php echo $enreg["adresse"];?>,
        <?php echo $enreg["numero"];?>, 
        <br>
        
        <?php } ?>
        <?php
            mysqli_close($conn)
            ?>
            </body>
            </html>