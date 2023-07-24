<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produits</title>
    <link rel="stylesheet" href="../style.css" class="css">
</head>
<body>
<h2>Ajouter des produits</h2>
  <form action="insertproduits.php" method="POST">
    <label for="nom_produit">Nom du produits :</label><br>
    <input type="text" name="nom_produit" id="nom_produit" required><br>

    <label for="prix">Prix</label><br>
    <input type="int" name="prix" id="prix" required><br>
 
    <label for="quantite_en_stock">Quantite en stock</label><br>
    <input type="int" name="quantite_en_stock" id="quantite_en_stock" required><br>
    <label for="designation">Designation</label><br>
    <input type="text" name="designation" id="designation" required><br>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>