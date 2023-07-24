<!DOCTYPE html>
<html>
<head>
  <title>Information de donnees</title>
  <link rel="stylesheet" href="../style.css" class="css">
</head>
<body>

  <h2>Enregistrer utilisateur</h2>
  <form action="inscrire.php" method="POST">
    <label for="nom_utilisateur">Nom d'utilisateur :</label><br>
    <input type="text" name="nom_utilisateur" id="nom_utilisateur" required><br>

    <label for="email">Email :</label><br>
    <input type="text" name="email" id="email" required><br>

    <label for="mot_de_passe">Mot de passe :</label><br>
    <input type="password" name="mot_de_passe" id="mot_de_passe" required><br>

    <label for="confirm_mdp">Confirmer votre mot de passe:</label><br>
    <input type="password" name="confirm_mdp" id="confirm_mdp" required><br>

    <label for="role">Role :</label>
    <select id="user-type" name="role_utilisateur" required>
      <option value="Client">client</option>
      <option value="admin">Administrateur</option>
      <option value="vendeur">Vendeur</option>
    </select><br>

    <input type="submit" value="Ajouter">
  </form>



</body>
</html>
