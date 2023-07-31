<?php
include("../connexion.php");

// Récupération des données du formulaire
$id_produit= $_POST['id_produit'];
$id_commande = $_POST['id_commande'];
$date_facture = $_POST['date_facture'];
$prix_unitaire =$_POST['prix_unitaire'];
$quantite_acheter=$_POST['quantite_acheter'];

// Insertion des données dans la table produits
$sql = "INSERT INTO facture(id_produit, id_commande,date_facture, prix_unitaire,quantite_acheter)
 VALUES ('$id_produit', '$id_commande', '$date_facture', '$prix_unitaire','$quantite_acheter')";

if (mysqli_query($conn, $sql)) {
    // Message de confirmation
    echo '<h2>Le facture a été ajouté avec succès !</h2>';

    // Redirection vers la page affichage.php après un court délai
    header("refresh:2;url=./affichage.php");
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>
