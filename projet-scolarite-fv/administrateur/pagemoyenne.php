<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Statistiques des Élèves</title>
<style>
    body {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    table {
        width: 45%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .statistiques {
        text-align: center;
        margin-top: 20px;
        width: 100%;
    }
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
</head>
<body>
<div class= div1>
    <?php 
    echo "<center> Vous etes connecte ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
    ?>
    </div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scolarite1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Étape 1: Liste des élèves par ordre croissant de leurs moyennes
$sqlListeEleves = "SELECT nom, moyenne FROM eleve ORDER BY moyenne ASC";
$resultListeEleves = $conn->query($sqlListeEleves);

if ($conn->error) {
    die("Erreur de requête SQL : " . $conn->error);
}

if ($resultListeEleves->num_rows > 0) {
    echo "<table><tr><th>Nom</th><th>Moyenne</th></tr>";
    while($row = $resultListeEleves->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nom"]) . "</td><td>" . htmlspecialchars($row["moyenne"]) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun élève trouvé.";
}


// Étape 2: Calcul de la moyenne générale des élèves
$sqlMoyenneGenerale = "SELECT AVG(moyenne) AS moyenne_generale FROM eleve";
$resultMoyenneGenerale = $conn->query($sqlMoyenneGenerale);
$rowMoyenneGenerale = $resultMoyenneGenerale->fetch_assoc();
$moyenneGenerale = $rowMoyenneGenerale['moyenne_generale'];

// Étape 3: Calcul du pourcentage des admis (moyenne >= 10)
$sqlPourcentageAdmis = "SELECT COUNT(*) AS total, SUM(moyenne >= 10) AS admis FROM eleve";
$resultPourcentageAdmis = $conn->query($sqlPourcentageAdmis);
$rowPourcentageAdmis = $resultPourcentageAdmis->fetch_assoc();
$pourcentageAdmis = ($rowPourcentageAdmis['admis'] / $rowPourcentageAdmis['total']) * 100;

// Étape 4: Affichage des statistiques
echo "<div class='statistiques'>";
echo "<h2>Statistiques des Élèves</h2>";
echo "<p>Moyenne générale des élèves : " . round($moyenneGenerale, 2) . "</p>";
echo "<p>Pourcentage des admis : " . round($pourcentageAdmis, 2) . "%</p>";
echo "<p>Nombre d'admis : " . $rowPourcentageAdmis['admis'] . "</p>";
echo "<p>Nombre de redoublants : " . ($rowPourcentageAdmis['total'] - $rowPourcentageAdmis['admis']) . "</p>";
echo "</div>";

// Étape 5: Affichage des tableaux des redoublants et des admis
echo "<div class='table-container' style='display: flex; justify-content: space-between;'>";

// Tableau des redoublants
echo "<div>";
echo "<h3>Redoublants</h3>";
echo "<table>";
echo "<tr><th>Nom</th><th>Moyenne</th></tr>";
$sqlRedoublants = "SELECT nom, moyenne FROM eleve WHERE moyenne < 10 ORDER BY moyenne ASC";
$resultRedoublants = $conn->query($sqlRedoublants);
if ($resultRedoublants->num_rows > 0) {
    while($row = $resultRedoublants->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nom"]) . "</td><td>" . htmlspecialchars($row["moyenne"]) . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>Aucun redoublant</td></tr>";
}
echo "</table>";
echo "</div>";

// Tableau des admis
echo "<div>";
echo "<h3>Admis</h3>";
echo "<table>";
echo "<tr><th>Nom</th><th>Moyenne</th></tr>";
$sqlAdmis = "SELECT nom, moyenne FROM eleve WHERE moyenne >= 10 ORDER BY moyenne ASC";
$resultAdmis = $conn->query($sqlAdmis);
if ($resultAdmis->num_rows > 0) {
    while($row = $resultAdmis->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nom"]) . "</td><td>" . htmlspecialchars($row["moyenne"]) . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>Aucun admis</td></tr>";
}
echo "</table>";
echo "</div>";

echo "</div>"; 

$conn->close();
?>
</body>
</html>

