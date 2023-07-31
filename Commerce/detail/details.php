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
<h2>Details de commande</h2>
  <form action="insert.php" method="POST">
    <label for="id_commande">Id commande :</label><br>
    <input type="int" name="id_commande" id="id_commande" required><br>

    <label for="id_produit">Id produit</label><br>
    <input type="int" name="id_produit" id="id_produit" required><br>

    <label for="quantite">Quantite </label><br>
    <input type="int" name="quantite" id="quantite" required><br>
    <label for="statut">Statut</label><br>
    <select id="statut" name="statut" required>
				<option value="non delivrer">Non delivrer</option>
				<option value="delivrer">Delivrer</option>
				<option value="preparation">En preparation</option>
    </select>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>