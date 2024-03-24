
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
    <div class= div1>
    <?php 
    echo "<center> Bienvenue vous etes connecté en tant que professeur  ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
    ?>
    </div>
    
<style>
   
   <style>
  
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   }

   body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:#CBCFDB;
    padding: 20px;
    line-height: 1.6;
    position: relative; 
}
 .div1 {
    background-color: #009879;
    color: white;
    padding: 10px;
    text-align: center;
    border-radius: 8px;
    position: fixed; 
    top: 0;
    right: 0;
    margin: 10px;
 }

 main {
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

 h2 {
    color: #333;
    margin-bottom: 10px;
 }

 input[type="text"],
 input[type="tel"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
 }

 input[type="text"]:focus,
 input[type="tel"]:focus {
    background-color: #ddd;
    outline: none;
 }

 button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
 }

 button:hover {
    opacity: 0.8;
 }


 a {
    display: inline-block;
    margin: 10px 0;
    color: #007bff;
    text-decoration: none;
 }

 a:hover {
    text-decoration: underline;
 }

 @media screen and (max-width: 600px) {
    .wrapper {
        flex-direction: column;
    }

    input[type="text"],
    input[type="tel"],
    button {
        width: 100%;
    }
 }
 div{
   background-color:white;
   margin-left:30%;
   margin-right:30%;
   border-radius: 15px;
   margin-top:10%;


 }

</style>



    
    <center><div>
      

    <a href="tableaueleve.php">Tableau des élèves</a> <br>
    <a href="tableau2.php">Tableau des élèves-2</a><br>
   
    <a href="special2.php">Tableau des élèves-3</a> <br>
   
    <a href="recherche.php">Rechercher  </a> <br>
  
    <a href="Affichagediv.php">Affichage-DIV </a> <br>
 
    <a href="afficher.php"> Formulaire</a> <br>


    <a href="dec.php"> Déconnexion</a></center>
    
    </div>

</body>
</html>
