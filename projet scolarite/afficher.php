
      

      <?php 
      session_start();?>
      <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="divdroite.css">
        <div class= div1>
    <?php 
    echo "<center> Vous etes connecte ".$_SESSION["log"]." ".$_SESSION["mdp"]."</center>";
    ?>
    </div>
    <style>
           <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
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
    <?php
    @include("connexion.php");
    $requete="select * from eleve2";
    $resultat=mysqli_query($conn, $requete);
    ?>
        <center><table border="1">
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Niveau</th>
        <th>Photo</th>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
        ?>
        <tr>
        <td><?php echo $enreg["nom"];?></td>
        <td><?php echo $enreg["prenom"];?></td>
        <td><?php echo $enreg["date_de_naissance"];?></td>
        <td><?php echo $enreg["email"];?></td>
        <td><?php echo $enreg["tel"];?></td>
        <td><?php echo $enreg["adresse"];?></td>
        <td><?php echo $enreg["ville"];?></td>
        <td><?php echo $enreg["niveau"];?></td>
        <td><?php echo '<img height=100px width=100p src="photo/'.$enreg["photo"].'"';?></td>
        </tr>
        <?php } ?>
        </table></center>
        <?php
            mysqli_close($conn)
            ?>
            </body>
            </html>