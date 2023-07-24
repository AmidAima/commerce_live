<?php
include("../connexion.php");

// Récupération des données du formulaire
$nom_produit = $_POST['nom_produit'];
$prix = $_POST['prix'];
$quantite_en_stock = $_POST['quantite_en_stock'];
$designation = $_POST['designation'];

// Insertion des données dans la table produits
$sql = "INSERT INTO produits (nom_produit, prix, quantite_en_stock, designation) VALUES ('$nom_produit', '$prix', '$quantite_en_stock', '$designation')";

if (mysqli_query($conn, $sql)) {
    // Message de confirmation
    echo '<h2>Le produit a été ajouté avec succès !</h2>';

    // Redirection vers la page affichage.php après un court délai
    header("refresh:2;url=./afichage.php");
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>
