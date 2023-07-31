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
<h2>Ajouter des commandes</h2>
  <form action="insert.php" method="POST">
    <label for="id_utilisateur">Id client :</label><br>
    <input type="text" name="id_utilisateur" id="id_utilisateur" required><br>

    <label for="date_commande">Date de commandes</label><br>
    <input type="date" name="date_commande" id="date_commande" required><br>
 
    <label for="moyen_livraison">moyen de livraison</label><br>
    <select id="moyen_livraison" name="moyen_livraison" required>
	                        <option value="DHL">DHL</option>
				<option value="Post">Post</option>
				<option value="Express">Express</option>
				
    </select>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>
