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
    $conn=mysqli_connect("localhost","root","","scolarite1");
    $requete="select * from eleve";
    $resultat=mysqli_query($conn, $requete);
    ?>
        <center><table border="1">
            <tr><td>Identifiant</td><td>Nom</td><td>Adresse</td><td>num_telephone</td></tr>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
        ?>
        <tr>
        <td><?php echo $enreg["num"];?></td>
        <td><?php echo $enreg["nom"];?></td>
        <td><?php echo $enreg["adresse"];?></td>
        <td><?php echo $enreg["numero"];?></td>
        </tr>
        <?php } ?>
        </table></center> 
        <?php
            mysqli_close($conn)
            ?>
            </body>
            </html>