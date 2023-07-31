<?php
include("../connexion.php");

if (isset($_GET['id_produit'])) {
    $id_produit = $_GET['id_produit'];

    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nom_produit= $_POST['nom_produit'];
        $prix = $_POST['prix'];
        $quantite_en_stock = $_POST['quantite_en_stock'];
        $designation =$_POST['designation'];
  
  

       $sql = "UPDATE produits SET  nom_produit='$nom_produit', prix= '$prix', quantite_en_stock = '$quantite_en_stock',designation='$designation' WHERE id_produit = '$id_produit'";

        if ($conn->query($sql) === TRUE) {
            echo "Les informations du produit ont été mises à jour avec succès.";
            header("location:affichage.php");
        } else {
            echo "Erreur lors de la mise à jour des informations des produits: " . $conn->error;
        }
    }
   
    include("../connexion.php");
  
    $sql = "SELECT * FROM produits WHERE id_produit = '$id_produit' ";
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
            <title>Modifier le produit</title>
            <link rel="stylesheet" type="text/css" href="../home.css">
         
        </head>

        <body>
            <div class="form-container">
                
                <form method="post" action="modifier.php?id_produit=<?php echo $id_produit; ?>">
                    <label for="nom_produit">Nom du produits :</label><br>
                    <input type="text" name="nom_produit" value="<?php echo $row['nom_produit']; ?>" required><br>
                    <label for="prix">Prix</label><br>
                    <input type="int" name="prix" value="<?php echo $row['prix']; ?>" required><br>
                    <label for="quantite_en_stock">Quantite en stock</label><br>
                    <input type="int" name="quantite_en_stock" value="<?php echo $row['quantite_en_stock']; ?>" required><br>
                    <label for="designation">Designation</label><br>
                    <input type="text" name="designation" value="<?php echo $row['designation']; ?>" required><br>
                    
                    <input type="submit" value="modifier">
                </form>
            </div>
        </body>
        </html>

    <?php
    } else {
        echo "Aucun commande trouvé avec l'id: " ;
    }
} else {
    echo "La clé 'id_cmd' n'existe pas dans la requête GET.";
}

$conn->close();
?>
