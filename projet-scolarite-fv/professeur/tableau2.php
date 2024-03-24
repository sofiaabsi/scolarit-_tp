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
   
   body {

background-color:#CBCFDB;

}
.div1 {
background-color: #009879;
color: white;
padding: 10px;
text-align: center;
border-radius: 8px;
position: fixed; 
top: 0;
right: 0;
margin: 10px;
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