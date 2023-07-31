<?php
include("../connexion.php");

// Vérifier si la clé 'code' existe dans $_GET
if (isset($_GET['id_detail'])) {
    $id_detail = $_GET['id_detail'];

    $sql = "DELETE FROM details_commande WHERE id_detail= '$id_detail'";

    if ($conn->query($sql) === TRUE) {
        echo "Le details commandes a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du produit : " . $conn->error;
    }
} else {
    echo "La clé  n'existe pas dans la requête GET.";
}
 
$conn->close();


include("../connexion.php");

$sql = "SELECT * FROM details_commande";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Id commande</th><th>Id produit</th><th>Quantite</th><th>Statut</th><th>Modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_detail'] . "</td>";
        echo "<td>" . $row['id_commande'] . "</td>";
        echo "<td>" . $row['id_produit'] . "</td>";
        echo "<td>" . $row['quantite'] . "</td>";
        echo "<td>" . $row['statut'] . "</td>";
      ;
        echo "<td><a href='modifier.php?id_detail=".$row['id_detail']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_detail=".$row['id_detail']."'>Supprimer</a></td>";
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
