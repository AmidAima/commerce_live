<?php
include("../connexion.php");

if (isset($_GET['id_detail'])) {
    $id_detail = $_GET['id_detail'];

    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id_commande = $_POST['id_commande'];
        $id_produit = $_POST['id_produit'];
        $quantite = $_POST['quantite'];
        $statut = $_POST['statut'];


       $sql = "UPDATE details_commande SET  id_commande='$id_commande', id_produit= '$id_produit', quantite = '$quantite',statut='$statut' WHERE id_detail = '$id_detail'";

        if ($conn->query($sql) === TRUE) {
            echo "Les informations du  details commande ont été mises à jour avec succès.";
            header("location:affichage.php");
        } else {
            echo "Erreur lors de la mise à jour des informations du details de commandes: " . $conn->error;
        }
    }

    include("../connexion.php");
  
    $sql = "SELECT * FROM details_commande  WHERE id_detail = '$id_detail' ";
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
            <title>Modifier le commande</title>
            <link rel="stylesheet" type="text/css" href="../home.css">
         
        </head>

        <body>
            <div class="form-container">
     
               </form>
                    <form method="post" action="modifier.php?id_detail=<?php echo $id_detail; ?>">
                   <label for="id_commande">Id commande :</label><br>
                    <input type="text" name="id_commande" value="<?php echo $row['id_commande']; ?>" required><br>
                    <label for="id_produit">Id produit</label><br>
                    <input type="int" name="id_produit" value="<?php echo $row['id_produit']; ?>" required><br>
                    <label for="quantite">Quantite </label><br>
                    <input type="int" name="quantite" value="<?php echo $row['quantite']; ?>" required><br>
                    <select name="statut" value="<?php echo $row['statut']; ?>" required><br>
                        <option value="non delivrer">Non delivrer</option>
                        <option value="delivrer">Delivrer</option>
                        <option value="preparation">En preparation</option>     
                    </select>
                    <input type="submit" value="Ajouter">
                    </form>

                    
       
            </div>
        </body>
        </html>

    <?php
    } else {
        echo "Aucun  details de commande trouvé avec l'id: " ;
    }
} else {
    echo "La clé 'id_detais n'existe pas dans la requête GET.";
}

$conn->close();
?>
