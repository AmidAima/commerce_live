<?php
include("../connexion.php");

// Récupération des données du formulaire
$id_commande= $_POST['id_commande'];
$id_produit= $_POST['id_produit'];
$quantite = $_POST['quantite'];
$statut = $_POST['statut'];

// Insertion des données dans la table produits
$sql = "INSERT INTO details_commande (id_commande, id_produit,quantite,statut) VALUES ('$id_commande','$id_produit', '$quantite','$statut')";

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
