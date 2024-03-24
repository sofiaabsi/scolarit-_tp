<?php
@include("connexion.php");

$id_animation = isset($_GET['id-animation']) ? intval($_GET['id-animation']) : 0;

if ($id_animation > 0) {

    $requete = "SELECT identifiant, nom, prenom, email, tel, adresse, ville, niveau, photo 
                FROM eleve2
                WHERE `id-animation` = ?";
                
    $stmt = $conn->prepare($requete);
    if (!$stmt) {
        die("Erreur de préparation de la requête: " . $conn->error);
    }
    $stmt->bind_param("i", $id_animation);
    $stmt->execute();
    $resultat = $stmt->get_result();
    
    if ($resultat->num_rows > 0) {
        echo "<h2>Liste des élèves inscrits à l'animation sélectionnée :</h2>";
        echo "<table>";
        echo "<tr>
                <th>Identifiant</th><th>Nom</th><th>Prénom</th><th>Email</th>
                <th>Tel</th><th>Adresse</th><th>Ville</th><th>Niveau</th><th>Photo</th>
              </tr>";
        while ($row = $resultat->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["identifiant"]) . "</td>
                    <td>" . htmlspecialchars($row["nom"]) . "</td>
                    <td>" . htmlspecialchars($row["prenom"]) . "</td>
                    <td>" . htmlspecialchars($row["email"]) . "</td>
                    <td>" . htmlspecialchars($row["tel"]) . "</td>
                    <td>" . htmlspecialchars($row["adresse"]) . "</td>
                    <td>" . htmlspecialchars($row["ville"]) . "</td>
                    <td>" . htmlspecialchars($row["niveau"]) . "</td>
                    <td><img src='path_to_images/" . htmlspecialchars($row["photo"]) . "' alt='Photo' style='width: 100px;'></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Aucun élève n'est inscrit à cette animation.</p>";
    }
    
    $stmt->close();
} else {
    echo "<p>Veuillez sélectionner une animation.</p>";
}

$conn->close();
?>
