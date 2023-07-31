<?php
// Recherche de médicaments
if (isset($_POST['recherche'])) {
    $search_term = $_POST['recherche'];
 
    include("../connexion.php");
    // Requête de recherche des médicaments correspondants
    $sql = "SELECT * FROM commandes WHERE id_utilisateur LIKE '%$search_term%' OR moyen_livraison LIKE '%$search_term%'  OR date_commande LIKE '%$search_term%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Résultats de recherche pour \"$search_term\" :</h2>";
        echo "<table border=1>";
        echo "<tr><th>Id</th><th>Id utilisateur</th><th>Date commande</th><th>moyen livraison</th><th>modifier</th><th>supprimer</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_commande'] . "</td>";
            echo "<td>" . $row['id_utilisateur'] . "</td>";
            echo "<td>" . $row['date_commande'] . "</td>";
            echo "<td>" . $row['moyen_livraison'] . "</td>";
            echo "<td><a href='modifier.php?id_commande=".$row['id_commande']."'>Modifier</a></td>";
            echo "<td><a href='supprimer.php?id_commande=".$row['id_commande']."'>Supprimer</a></td>";
            echo "</tr>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé pour \"$search_term\".";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home.css" class="css">
</head>
<body>
    
</body>
</html>
