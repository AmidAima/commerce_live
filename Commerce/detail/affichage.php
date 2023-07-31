<?php

include("../connexion.php");

$sql = "SELECT * FROM details_commande JOIN produits ON produits.id_produit=details_commande.id_produit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<h2>Tous les  details commandes des clients </h2>";
    echo "<table border=1>";
    echo "<tr><th>id</th><th>id commande</th><th>Id produit</th><th>Nom produit</th><th>Prix</th><th>Quantite</th><th>Statut</th><th>modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_detail'] . "</td>";
        echo "<td>" . $row['id_commande'] . "</td>";
        echo "<td>" . $row['id_produit'] . "</td>";
        echo "<td>" . $row['nom_produit'] . "</td>";
        echo "<td>" . $row['prix'] . "</td>";
        echo "<td>" . $row['quantite'] . "</td>";
        echo "<td>" . $row['statut'] . "</td>";
        echo "<td><a href='modifier.php?id_detail=".$row['id_detail']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_detail=".$row['id_detail']."'>Supprimer</a></td>";
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

