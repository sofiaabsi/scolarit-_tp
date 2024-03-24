<?php
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
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
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    color: #333;
}

.div1 {
    position: absolute;
    top: 10px; 
    right: 10px; 
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-radius: 8px;
}

.modifier {
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-radius: 8px;
    margin-top: 10%;
    width:40%;
    margin-left:30%;
   
    
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

input[type=text], input[type=submit] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    max-width: 400px;
    box-sizing: border-box; /* Ensures padding doesn't increase width */
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

center {
    text-align: center;
}

</style>
</head>
<body>

<div class= div1>
    <?php 
    echo "<center> Bienvenue vous etes connecté en tant que directeur ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
    ?>
    </div>
    <?php @include("connexion.php");
    $id = $_POST['num'];
    $requete = "SELECT * FROM eleve WHERE num = $id";
    $resultat = mysqli_query($conn, $requete);
   
    $enreg = mysqli_fetch_array($resultat);
    ?>
       <center>  <div class="modifier"><form action="update.php" method="post">
     <?php
      echo "Voici les informations concernant l'eleve numéro " . $id . "<br>";
        echo '<input type="number" name="num" value="' . $enreg['num'] . '">';
        echo '<input type="text" name="nom" value="' . $enreg['nom'] . '">';
        echo '<input type="text" name="adresse" value="' . $enreg['adresse'] . '">';
        echo '<input type="text" name="num_telephone" value="' . $enreg['numero'] . '">';
        echo '<input type="submit" value="Modifier">';
        echo '<br><a href="page1.php">Retour</a>';
        mysqli_close($conn);
        ?>
    </form></div></center>
</body>
</html>
