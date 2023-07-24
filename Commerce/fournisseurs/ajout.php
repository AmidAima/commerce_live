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
<h2>Ajouter des fournisseurs</h2>
  <form action="insert.php" method="POST">
    <label for="nom">Nom du fournisseurs :</label><br>
    <input type="text" name="nom" id="nom" required><br>

    <label for="adresse">Adresse</label><br>
    <input type="text" name="adresse" id="adresse" required><br>
 
    <label for="numero_telephone">Telephone</label><br>
    <input type="int" name="numero_telephone" id="numero_telephone" required><br>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>