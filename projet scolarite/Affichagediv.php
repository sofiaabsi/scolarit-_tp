<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Affichage des élèves</title>

</head>

<body>

<h1>Liste des élèves</h1>

<div class="container">
    <?php
    @include("connexion.php");

    $requete = "SELECT * FROM eleve";
    $resultat = mysqli_query($conn, $requete);

    while ($enreg = mysqli_fetch_array($resultat)) {
        echo '<div class="fiche">';
        echo '<h2>'.$enreg['nom'].'</h2>';
        echo '<p><strong>Numéro:</strong> '.$enreg['num'].'</p>';
        echo '<p><strong>Adresse:</strong> '.$enreg['adresse'].'</p>';
        echo '<p><strong>Numéro de téléphone:</strong> '.$enreg['numero'].'</p>';
        echo '</div>';
    }
    echo '<center><a href="green.php">retour</a></center>';
    mysqli_close($conn);
    ?>
</div>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.fiche {
    background-color: #849CFF; 
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    width: 300px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}

h1 {
    text-align: center;
}

h2 {
    margin-top: 0;
    color: #333;
}

p {
    margin: 10px 0;
}

strong {
    font-weight: bold;
}

.fiche a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.fiche a:hover {
    background-color: #45a049;
}



    .fiche h2 {
        text-align: center;
     
    }


</style>

</style>

</body>
</html>