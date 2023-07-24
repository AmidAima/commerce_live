<?php

include("../connexion.php");

$sql = "SELECT * FROM produits";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<h2>Tous les produits </h2>";
    echo "<table border=1>";
    echo "<tr><th>code</th><th>Nom medicament</th><th>prix unitaire</th><th>Quantite vendu</th><th>Somme a payer</th><th>modifier</th><th>supprimer</th></tr>";
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
        echo "</tr>";
    }
    echo "</table>";
}
 else {
         echo "Aucun produits a enregistré dans votre données.";
       }

$conn->close();
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

