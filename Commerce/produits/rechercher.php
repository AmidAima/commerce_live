<?php
// Recherche de produits
if (isset($_POST['recherche'])) {
    $search_term = $_POST['recherche'];
 
    include("../connexion.php");
    // Requête de recherche des produits correspondants
    $sql = "SELECT * FROM produits WHERE nom_produit LIKE '%$search_term%' OR designation LIKE '%$search_term%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Résultats de recherche pour \"$search_term\" :</h2>";
        echo "<table border=1>";
        echo "<tr><th>Id</th><th>Nom produit</th><th>prix</th><th>Quantité en stock</th><th>Designation</th><th>modifier</th><th>supprimer</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_produit'] . "</td>";
            echo "<td>" . $row['nom_produit'] . "</td>";
            echo "<td>" . $row['prix'] . "</td>";
            echo "<td>" . $row['quantite_en_stock'] . "</td>";
            echo "<td>" . $row['designation'] . "</td>";
            echo "<td><a href='modifier.php?id_produit=".$row['id_produit']."'>Modifier</a></td>";
            echo "<td><a href='supprimer.php?id_produit=".$row['id_produit']."'>Supprimer</a></td>";
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
