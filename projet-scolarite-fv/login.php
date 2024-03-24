<?php
session_start();
?>
<html>
<body>
    <?php
    @include("connexion.php");
    $a=$_POST["login"];
    $b=MD5($_POST["password"]);
    
    $_SESSION["log"]=$_POST['login'];
    $_SESSION["mdp"]=$_POST['password'];

    
 



    $requete=("SELECT * from user where login='$a' and motdepasse='$b'");
    $resultat=mysqli_query($conn, $requete);
    $ligne=mysqli_num_rows($resultat);
    $enreg=mysqli_fetch_array($resultat);
    if($ligne==1)
    
 
       { if ($enreg ["statut"]=="Enseignant")
            header("location:professeur/green.php");
      
        else
      
           header("location:administrateur/page1.php");
        }
        

    else
        header("location:index2.html");

?>
        

   
        
    
</body>
</html>