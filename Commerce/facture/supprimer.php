<?php
include("../connexion.php");

// Vérifier si la clé 'code' existe dans $_GET
if (isset($_GET['id_facture'])) {
    $id_facture = $_GET['id_facture'];

    $sql = "DELETE FROM facture WHERE id_facture= '$id_facture";

    if ($conn->query($sql) === TRUE) {
        echo "Le produit a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du produit : " . $conn->error;
    }
} else {
    echo "La clé  n'existe pas dans la requête GET.";
}

$conn->close();

include("../connexion.php");

$sql = "SELECT * FROM facture";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Id commande</th><th>Id produit</th><th>Date facture</th><th>prix_unitaire</th><th>Montant total</th><th>Modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_facture'] . "</td>";
        echo "<td>" . $row['id_commande'] . "</td>";
        echo "<td>" . $row['id_produit'] . "</td>";  
        echo "<td>" . $row['date_facture'] . "</td>";
        echo "<td>" . $row['prix_unitaire'] . "</td>";
        echo "<td>" . $row['quantite_acheter'] . "</td>";
        echo "<td>" . $row['montant_total'] . "</td>";
      ;
        echo "<td><a href='modifier.php?id_facture=".$row['id_facture']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_facture=".$row['id_facture']."'>Supprimer</a></td>";
        echo "</tr>";
    }
    echo "</table>";
   

} else {
    echo "Aucun facture enregistré dans la base de données.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facture</title>
    <link rel="stylesheet" type="text/css" href="../home.css">
</head>

<body>

</body>

</html>
