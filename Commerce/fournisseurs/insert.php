<?php
include("../connexion.php");

// Récupération des données du formulaire
$nom = $_POST['nom'];
$adresse= $_POST['adresse'];
$numero_telephone = $_POST['numero_telephone'];


// Insertion des données dans la table produits
$sql = "INSERT INTO fournisseurs (nom,adresse, numero_telephone) VALUES ('$nom', '$adresse', '$numero_telephone')";

if (mysqli_query($conn, $sql)) {
    // Message de confirmation
    echo '<h2>Le produit a été ajouté avec succès !</h2>';

    // Redirection vers la page affichage.php après un court délai
    header("refresh:2;url=./affichage.php");
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>
