<?php

include("../connexion.php");

$sql = "SELECT * FROM commandes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<h2>Tous les commandes des clients </h2>";
    echo "<table border=1>";
    echo "<tr><th>id</th><th>id client</th><th>date de commande</th><th>moyen de livraison</th><th>modifier</th><th>supprimer</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_commande'] . "</td>";
        echo "<td>" . $row['id_client'] . "</td>";
        echo "<td>" . $row['date_commande'] . "</td>";
        echo "<td>" . $row['moyen_livraison'] . "</td>";
        echo "<td><a href='modifier.php?id_commande=".$row['id_commande']."'>Modifier</a></td>";
        echo "<td><a href='supprimer.php?id_commande=".$row['id_commande']."'>Supprimer</a></td>";
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

