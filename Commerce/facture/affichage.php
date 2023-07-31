<?php

include("../connexion.php");

$sql = "SELECT * ,(prix_unitaire * quantite_acheter) AS montant_total FROM facture JOIN produits ON produits.id_produit=facture.id_produit ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<h2>Tous les factures </h2>";
    echo "<table border=1>";
    echo "<tr><th>Id</th><th>Id commande</th><th>Id produit</th><th>Nom produit</th><th>Date facture</th><th>prix unitaire</th><th>Quantite acheter</th><th>Somme a payer</th><th>modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_facture'] . "</td>";
        echo "<td>" . $row['id_commande'] . "</td>";
        echo "<td>" . $row['id_produit'] . "</td>";  
        echo "<td>" . $row['nom_produit'] . "</td>";  
        echo "<td>" . $row['date_facture'] . "</td>";
        echo "<td>" . $row['prix_unitaire'] . "</td>";
        echo "<td>" . $row['quantite_acheter'] . "</td>";
        echo "<td>" . $row['montant_total'] . "</td>";
        echo "<td><a href='modifier.php?id_facture=".$row['id_facture']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_facture=".$row['id_facture']."'>Supprimer</a></td>";
        echo "</tr>";
        echo "</tr>";
    }
    echo "</table>";
}
 else {
         echo "Aucun facture a enregistré dans votre données.";
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

