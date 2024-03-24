<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des Élèves par Animation</title>
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
    body {
        font-family: 'Arial', sans-serif;
    }
    .center-form {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }
    select, button {
        padding: 10px;
        margin-right: 5px;
        font-size: 16px;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
</head>
<body>
<div class= div1>
    <?php 
    echo "<center> Bienvenue vous etes connecté en tant que directeur ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
    ?>
    </div><br> <br> <br> <br><br><br><br><br>
<div>
  <center>  <form action="affichage-animation.php" method="post">
        <select name="animation" style="text-align: center; font-weight: bold; font-size: 15px;" class="center">
            <option value="">Choisissez une animation</option>
            <?php
            @include("connexion.php");
            session_start();

            $requete = "SELECT * FROM animation";
            $resultat = mysqli_query($conn, $requete);
            
            while ($enre = mysqli_fetch_array($resultat)) {
                echo '<option value="'. utf8_encode($enre['nom_animation']) .'">'. utf8_encode($enre['nom_animation']) .'</option>';
            }
            ?>
        </select>
        <button type="submit" name="rechercher">Rechercher</button>
    </form>
</div>

<?php

if (isset($_POST['rechercher']) && !empty($_POST['animation'])) {
    $animationChoisie = mysqli_real_escape_string($conn, $_POST['animation']);

    // Requête pour obtenir l'identifiant, le nom et le prénom des élèves ayant choisi l'animation
    $requete = "SELECT identifiant, nom, prenom FROM eleve2 WHERE animation = '$animationChoisie'";
    $resultat = mysqli_query($conn, $requete);

    // Vérifier si la requête a retourné des résultats
    if ($resultat && mysqli_num_rows($resultat) > 0) {
        echo "<table>";
        echo "<tr><th>Identifiant</th><th>Nom</th><th>Prénom</th></tr>";
        while ($row = mysqli_fetch_assoc($resultat)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['identifiant']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
            echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun élève n'a choisi l'animation spécifiée.";
    }
} else {
    if (isset($_POST['rechercher'])) {
        echo "Veuillez choisir une animation.";
    }
}

echo '<center><a href="page1.php">Retour</a></center>';
mysqli_close($conn);
?>
</center>