<?php
include("../connexion.php");

// Récupération des données du formulaire
$id_client= $_POST['id_client'];
$date_commande= $_POST['date_commande'];
$moyen_livraison = $_POST['moyen_livraison'];


// Insertion des données dans la table produits
$sql = "INSERT INTO commandes (id_client, date_commande,moyen_livraison) VALUES ('$id_client','$date_commande', '$moyen_livraison')";

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
