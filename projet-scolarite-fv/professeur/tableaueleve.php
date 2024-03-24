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
.table{
    margin-top:40%;
}
</style>


    <?php
    $conn=mysqli_connect("localhost","root","","scolarite1");
    $requete="select * from eleve";
    $resultat=mysqli_query($conn, $requete);
    ?>
    <center>
        <table  border="1">
            <tr><td>Identifiant</td><td>Nom</td><td>Adresse</td><td>Num_telephone</td></tr>
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
        </table>
    </center>
        <?php
        
            mysqli_close($conn)
            
            ?>
            </body>
            </html>