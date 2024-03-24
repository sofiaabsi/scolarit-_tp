<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    
 <h1> Géstion des élèves</h1>
    <?php
  
    echo " Bienvenu vous etes connecté en tant que directeur " . $_SESSION["log"] . " " . $_SESSION["mdp"] . "</center>";
    ?>

    
    <div>
        
        <form action="page.1.php" method="post">
        <h2>Identifiant:</h2><input type="text" id="num" name="num">
        <h2>Nom:</h2><input type="text" id="nom" name="nom">
        <h2>Adresse:</h2><input type="text" id="adresse" name="adresse">
        <h2>Numéro de téléphone:</h2><input type="tel" id="numero" name="numero"> <br>
        <button>Valider</button>
    </form>

    <a href="tableaueleve.php">Tableau des élèves</a> <br>
    <a href="tableau2.php">Tableau des élèves 2</a><br>
    <a href="special-.php">Tableau Spécial</a><br>
    <a href="special2.php">Tableau Spécial 2</a> <br>
    <a href="supprimer.html">Supprimer</a> <br>
    <a href="recherche.php">Rechercher  </a> <br>
    <a href="recherche2page.php">Rechercher2  </a> <br>
    <a href="Affichagediv.php">Affichage 2 DIV </a> <br>
    <a href="dec.php"> Déconnexion</a>
    
    </div>

</body>
</html>
