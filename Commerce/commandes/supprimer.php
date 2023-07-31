<?php
include("../connexion.php");

// Vérifier si la clé 'code' existe dans $_GET
if (isset($_GET['id_commande'])) {
    $id_commande = $_GET['id_commande'];

    $sql = "DELETE FROM commandes WHERE id_commande= '$id_commande'";

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

$sql = "SELECT * FROM commandes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Date commande</th><th>Id utilisateur</th><th>Moyen de livraison</th><th>Modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id_commande']."</td>";
        echo "<td>" . $row['date_commande'] . "</td>";
        echo "<td>" . $row['id_utilisateur'] . "</td>";
        echo "<td>" . $row['moyen_livraison'] . "</td>";
      ;
        echo "<td><a href='modifier.php?id_commande=".$row['id_commande']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_commande=".$row['id_commande']."'>Supprimer</a></td>";
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
