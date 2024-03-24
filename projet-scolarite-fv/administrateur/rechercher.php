
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<div class= div1>
    <?php 
    echo "<center> Bienvenue vous etes connecté en tant que directeur ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
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

    $a = $_POST['num'];
    $requete = "SELECT * FROM eleve WHERE num = '$a'";
    $resultat = mysqli_query($conn, $requete);
    ?>

    <center>
        <table  border="1">
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
    echo '<center><a href="page1.php">retour</a></center>';
    mysqli_close($conn);
    ?>
</body>
</html>
