

<html>
<body>
    
    <?php
    @include("connexion.php");

    $a=$_POST["login"];
    $b=MD5($_POST["password"]);
    $c=$_POST["statut"];
    

    
    $reql="INSERT INTO user VALUES ('$a','$b','$c')";
    $rl= mysqli_query($conn, $reql);

    echo "<center><p>Enregistrement effectuer</p></center>";
    echo '<center><a href="index.html">Retour</a></center>';

   
    header("Refresh:2; url=index.html");



?>
</body>
</html>