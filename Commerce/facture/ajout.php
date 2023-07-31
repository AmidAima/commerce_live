<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facture</title>
    <link rel="stylesheet" href="../home.css" class="css">
</head>
<body>  
<h2>Ajouter des facture</h2>
  <form action="insert.php" method="POST">
    <label for="id_commande">Id commande :</label><br>
    <input type="int" name="id_commande" id="id_commande" required><br>

    <label for="id_produit">Id produit</label><br>
    <input type="int" name="id_produit" id="id_produit" required><br>
 
    <label for="date_facture">Date facture</label><br>
    <input type="date" name="date_facture" id="date_facture" required><br>
    <label for="prix_unitaire">Prix unitaire</label><br>
    <input type="int" name="prix_unitaire" id="prix_unitaire" required><br>
    <label for="quantite_acheter">Quantite acheter</label><br>
    <input type="int" name="quantite_acheter" id="quantite_acheter" required><br>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>