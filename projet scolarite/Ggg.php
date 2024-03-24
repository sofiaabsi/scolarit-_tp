

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body style="background-color: pink;">

<?php
@include("connecte.php");
$requete = "SELECT * FROM eleves";
$resultat = mysqli_query($conn, $requete);
?>

<select style="text-align: center; font-weight: bold; font-size: 15px;" class="center">
    <option value="">--Choisissez un élève--</option>
    <?php
    while($eleve = mysqli_fetch_array($resultat)) {
        echo '<option>' . utf8_encode($eleve['nom']) . '</option>';
    }
    ?>
</select>

<?php mysqli_close($conn); ?>

</body>
</html>
