<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nom_recherche"])) {
    // Récupérer la valeur de recherche du formulaire
    $nom_recherche = $_GET["nom_recherche"];

    // Connexion à la base de données
    $connexion = new mysqli("localhost", "root", "781227", "commerce_live");

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données: " . $connexion->connect_error);
    }

    // Préparation de la requête SQL pour rechercher des utilisateur par nom
    $requete = $connexion->prepare("SELECT * FROM Utilisateurs WHERE nom LIKE ?");

    // Ajouter des jokers % pour la recherche partielle
    $nom_recherche = '%' . $nom_recherche . '%';

    // Liaison de paramètres
    $requete->bind_param("s", $nom_recherche);

    // Exécuter la requête
    $requete->execute();

    // Récupérer les résultats de la requête
    $resultat = $requete->get_result();

    // Afficher les utilisateurs trouvés
    if ($resultat->num_rows > 0) {
        echo "<h1>Résultats de recherche</h1>";
        while ($row = $resultat->fetch_assoc()) {
            echo "ID Utilisateur : " . $row["id_utilisateur"] . "<br>";
            echo "Nom d'utilisateur: " . $row["nom"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Mot de passe: " . $row["mot_de_passe"] . "<br>";
            echo "Rôle: " . $row["role"] . "<br><br>";
        }
    } else {
        echo "Aucun utilisateur trouvé.";
    }

    // Fermer la requête et la connexion
    $requete->close();
    $connexion->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Rechercher des utilisateurs</title>
</head>
<body>
  <h1>Rechercher des utilisateurs</h1>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
    <label for="nom_recherche">Nom :</label>
    <input type="text" name="nom_recherche" id="nom_recherche"><br>

    <input type="submit" value="Rechercher">
  </form>
</body>
</html>
