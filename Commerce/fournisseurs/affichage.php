<?php

include("../connexion.php");

$sql = "SELECT * FROM fournisseurs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<h2>Tous les fournisseurs </h2>";
    echo "<table border=1>";
    echo "<tr><th>Id</th><th>Nom fournisseurt</th><th>Adresse</th><th>Telephone</th><th>modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_fournisseur'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['adresse'] . "</td>";
        echo "<td>" . $row['numero_telephone'] . "</td>";
        echo "<td><a href='modifier.php?id_fournisseur=".$row['id_fournisseur']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_fournisseur=".$row['id_fournisseur']."'>Supprimer</a></td>";
        echo "</tr>";
        echo "</tr>";
    }
    echo "</table>";
}
 else {
         echo "Aucun fournisseurs  dans votre données.";
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

