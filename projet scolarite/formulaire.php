<?php
@include("connexion.php");


$b = $_POST["nom"];
$c = $_POST["prenom"];
$d = $_POST["date_de_naissance"];
$e = $_POST["email"];
$f = $_POST["tel"];
$g = $_POST["adresse"];
$h = $_POST["ville"];
$i = $_POST["niveau"];

$file =$_FILES['file'];
$file_name = $_FILES['file']['name'];
$file_tmp_name = $_FILES['file']['tmp_name'];
$requete = "INSERT INTO eleve2 (nom, prenom, date_de_naissance, email, tel, adresse, ville, niveau, photo) VALUES ('$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$file_name')";
$path = "photo/$file_name"; 
if (move_uploaded_file($file_tmp_name, $path)) {
    
    
    if (mysqli_query($conn, $requete)) {
        echo "Étudiant ajouté avec succès.";
    } else {
        echo "Erreur d'ajout : " . mysqli_error($conn);
    }
} else {
    echo "Erreur de chargement de l'image.";
}

echo "<center><p>Enregistrement effectué</p></center>";
echo '<center><a href="formulaire.html">Retour</a></center>';
header("Refresh:6; url=formulaire.html");
?>
