
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <style>
          body {

background-color:#CBCFDB;

}
div {
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
<div classe= div>
    <?php

  echo " Vous etes connecte " . $_SESSION["log"] . " " . $_SESSION["mdp"] . "</center>";
  ?>
</div>

    <?php
    @include("connexion.php");

    $a = $_POST['num'];
    $requete = "SELECT * FROM eleve WHERE num = '$a'";
    $resultat = mysqli_query($conn, $requete);
    ?>

    <center>
        <table border="1">
            <tr>
                <td>Code_eleve</td>
                <td>Nom_eleve</td>
                <td>Adresse</td>
                <td>Num_telephone</td>
            </tr>
            <?php 
            while($enreg = mysqli_fetch_array($resultat)) {
            ?>
                <tr>
                    <td><?php echo $enreg['num']; ?></td>
                    <td><?php echo $enreg['nom']; ?></td>
                    <td><?php echo $enreg['adresse']; ?></td>
                    <td><?php echo $enreg['numero']; ?></td>
                </tr>
            <?php 
            } 
            ?>
        </table>
    </center>

    <?php
    echo '<center><a href="green.php">retour</a></center>';
    mysqli_close($conn);
    ?>
</body>
</html>
