<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="../style.css" class="css">
</head>
<body>
    <h2>Se connecter</h2>
    <form method="POST" action="login.php">
        <div>
            <label for="email">Votre mail:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="mot_passe">Mot de passe:</label>
            <input type="password" id="mot_passe" name="mot_passe" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
        <p> Si vous n'avez pas de compte ?<a href="ajoututilisateur.php">s'inscrire ici</a></p>
    </form>
</body>
</html>
