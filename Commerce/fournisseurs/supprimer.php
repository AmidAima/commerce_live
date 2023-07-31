<?php
include("../connexion.php");

// Vérifier si la clé 'code' existe dans $_GET
if (isset($_GET['id_fournisseur'])) {
    $id_fournisseur = $_GET['id_fournisseur'];

    $sql = "DELETE FROM fournisseurs WHERE id_fournisseur= '$id_fournisseur'";

    if ($conn->query($sql) === TRUE) {
        echo "Le fournisseur a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du fournisseur : " . $conn->error;
    }
} else {
    echo "La clé  n'existe pas dans la requête GET.";
}

$conn->close();

include("../connexion.php");

$sql = "SELECT * FROM fournisseurs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Nom</th><th>Adresse</th><th>Numero telephone</th><th>Modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id_fournisseur']."</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['adresse'] . "</td>";
        echo "<td>" . $row['numero_telephone'] . "</td>";
      ;
        echo "<td><a href='modifier.php?id_fournisseur=".$row['id_fournisseur']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_fournisseur=".$row['id_fournisseur']."'>Supprimer</a></td>";
        echo "</tr>";
    }
    echo "</table>";
   

} else {
    echo "Aucun fournisseur a enregistré dans la base de données.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fournisseurs</title>
    <link rel="stylesheet" type="text/css" href="../home.css">
</head>

<body>

</body>

</html>
