<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body style="background-color:viloet;">

    
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
       <center>  <select style="text-align: center; margin-top:10%; font-weight: bold; font-size: 15px;" class="center">
           <option value="">--Choississez un élève--</option> </center>
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