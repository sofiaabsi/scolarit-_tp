<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php @include("connexion.php");
    $id = $_POST['num'];
    $requete = "SELECT * FROM eleve WHERE num = $id";
    $resultat = mysqli_query($conn, $requete);
    echo "Voici les informations concernant l'eleve: " . $id . "<br>";
    $enreg = mysqli_fetch_array($resultat);
    ?>
    <form action="update.php" method="post">
        <?php
        echo '<input type="text" name="num" value="' . $enreg['num'] . '">';
        echo '<input type="text" name="nom" value="' . $enreg['nom'] . '">';
        echo '<input type="text" name="adresse" value="' . $enreg['adresse'] . '">';
        echo '<input type="text" name="num_telephone" value="' . $enreg['numero'] . '">';
        echo '<input type="submit" value="Modifier">';
        echo '<br><a href="green.php">Retour</a>';
        mysqli_close($conn);
        ?>
    </form>
</body>
</html>
