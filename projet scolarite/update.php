<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<?php
@include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $num_telephone = $_POST['numero'];

    $requete_update = "UPDATE eleve SET nom='$nom', adresse='$adresse', numero='$num_telephone' WHERE num='$num'";

    if (mysqli_query($conn, $requete_update)) {
        echo "Les informations de l'élève ont été mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des informations de l'élève : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>