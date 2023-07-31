<?php
include("../connexion.php");

// Vérifier si la clé 'code' existe dans $_GET
if (isset($_GET['id_produit'])) {
    $id_produit = $_GET['id_produit'];

    $sql = "DELETE FROM produits WHERE id_produit= '$id_produit'";

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

$sql = "SELECT * FROM produits";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Nom produit</th><th>Prix</th><th>Quantite en stock</th><th>designation</th><th>Modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_produit'] . "</td>";
        echo "<td>" . $row['nom_produit'] . "</td>";
        echo "<td>" . $row['prix'] . "</td>";
        echo "<td>" . $row['quantite_en_stock'] . "</td>";
        echo "<td>" . $row['designation'] . "</td>";;
      ;
        echo "<td><a href='modifier.php?id_produit=".$row['id_produit']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_produit=".$row['id_produit']."'>Supprimer</a></td>";
        echo "</tr>";
    }
    echo "</table>";
   

} else {
    echo "Aucun produit enregistré dans la base de données.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <link rel="stylesheet" type="text/css" href="../home.css">
</head>

<body>

</body>

</html>
