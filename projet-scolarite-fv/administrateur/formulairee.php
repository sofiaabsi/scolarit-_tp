<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Exemple</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <style>
        body {
    font-family: Arial, sans-serif;
    margin: 40px;
}

form {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
}

label {
    margin-top: 10px;
    display: block;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box; 
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

    </style>
    <h1>
        <center>Formulaire d'inscription officielle</center>
    </h1>

   <body>
        <form  action="formulaire.php" method="POST" id="monFormulaire" enctype="multipart/form-data">
           <label for="nom">Nom :</label>
           <input type="text" id="nom" name="nom">
           <label for="nom">Prénom :</label>
           <input type="text" id="prénom" name="prenom">
           <label for="nom">Téléphone :</label>
           <input type="tel" id="tel" name="tel">
   
           <label for="email">Email :</label>
           <input type="email" id="email" name="email">
   
           <label for="dateNaissance">Date de naissance :</label>
           <input type="date" id="date_de_naissance" name="date_de_naissance">
           <label for="adresse">Adresse:</label>
           <input type="text" id="adresse" name="adresse">
   
           <label for="ville">Ville :</label>
           <input type="text" id="ville" name="ville">
   
           <label for="niveau">Niveau :</label>
           <select id="niveau" name="niveau">
               <option value="debutant">Débutant</option>
               <option value="intermediaire">Intermédiaire</option>
               <option value="avance">Avancé</option>
               <option value="expert">Expert</option>
           </select>
           <?php
    $conn=mysqli_connect("localhost","root","","scolarite1");
    $requete="select * from animation";
    $resultat=mysqli_query($conn, $requete);
    ?>
        <select style="text-align: center; font-weight: bold; font-size: 15px;" class="center">
            <option value=""> Choississez une animation</option>
        <?php
        $i=1;
        while($enre= mysqli_fetch_array($resultat))
        {
            ?>
            <option><?php echo utf8_encode($enre['nom_animation'])?></option>
        <?php
            $i++;}
            $requete = "INSERT INTO user2 VALUES ('$animation')";
        ?>
        
    
   
           <label for="commentaire">Commentaire :</label>
           <textarea id="commentaire" name="commentaire"></textarea>
   
           <label for="image">Choisir une image :</label>
           <input type="file" id="image" name="file">
   
           <input type="submit" value="S'inscrire" name="submit"/>
       </form>
   
</body>
</html>
