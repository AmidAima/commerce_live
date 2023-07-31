<?php
include("../connexion.php");

if (isset($_GET['id_facture'])) {
    $id_facture = $_GET['id_facture'];

    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id_produit= $_POST['id_produit'];
        $id_commande = $_POST['id_commande'];
        $date_facture = $_POST['date_facture'];
        $prix_unitaire =$_POST['prix_unitaire'];
        $quantite_acheter=$_POST['quantite_acheter'];
  
       $sql = "UPDATE facture SET  id_produit='$id_produit', date_facture= '$date_facture', prix_unitaire = '$prix_unitaire',quantite_acheter='$quantite_acheter' WHERE id_facture = '$id_facture'";

        if ($conn->query($sql) === TRUE) {
            echo "Les informations du produit ont été mises à jour avec succès.";
            header("location:affichage.php");
        } else {
            echo "Erreur lors de la mise à jour des informations des produits: " . $conn->error;
        }
    }
   
    include("../connexion.php");
  
    $sql = "SELECT * FROM facture WHERE id_facture = '$id_facture' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modifier le facture</title>
            <link rel="stylesheet" type="text/css" href="../home.css">
         
        </head>

        <body>
            <div class="form-container">
                
                <form method="post" action="modifier.php?id_facture=<?php echo $id_facture; ?>">
                    <label for="id_produit">Id produit :</label><br>
                    <input type="int" name="id_produit" value="<?php echo $row['id_produit']; ?>" required><br>
                    <label for="id_commande">Id commande</label><br>
                    <input type="int" name="id_commande" value="<?php echo $row['id_commande']; ?>" required><br>
                    <label for="date_facture">Date facture</label><br>
                    <input type="date" name="date_facture" value="<?php echo $row['date_facture']; ?>" required><br>
                    <label for="prix_unitaire">prix unitaire</label><br>
                    <input type="int" name="prix_unitaire" value="<?php echo $row['prix_unitaire']; ?>" required><br>
                    <label for="quantite_acheter">Quantite acheter</label><br>
                    <input type="int" name="quantite_acheter" value="<?php echo $row['quantite_acheter']; ?>" required><br>
                    <input type="submit" value="modifier">
                </form>
            </div>
        </body>
        </html>

    <?php
    } else {
        echo "Aucun produits trouvé avec l'id: " ;
    }
} else {
    echo "La clé 'id_cmd' n'existe pas dans la requête GET.";
}

$conn->close();
?>
