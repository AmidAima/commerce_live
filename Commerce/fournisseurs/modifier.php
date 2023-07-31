<?php
include("../connexion.php");

if (isset($_GET['id_fournisseur'])) {
    $id_fournisseur = $_GET['id_fournisseur'];

    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $numero_telephone = $_POST['numero_telephone'];
      

  

       $sql = "UPDATE fournisseurs SET  nom='$nom', adresse= '$adresse', numero_telephone = '$numero_telephone' WHERE id_fournisseur = '$id_fournisseur'";

        if ($conn->query($sql) === TRUE) {
            echo "Les informations du commande ont été mises à jour avec succès.";
            header("location:affichage.php");
        } else {
            echo "Erreur lors de la mise à jour des informations du fournisseur: " . $conn->error;
        }
    }
   
    include("../connexion.php");
  
    $sql = "SELECT * FROM fournisseurs WHERE id_fournisseur = '$id_fournisseur' ";
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
            <title>Modifier le fournisseur</title>
            <link rel="stylesheet" type="text/css" href="../home.css">
         
        </head>

        <body>
            <div class="form-container">
                <div class="image-container">
                    
                </div>
        
                    <form method="post" action="modifier.php?id_fournisseur=<?php echo $id_fournisseur; ?>">
                    <label for="nom">Nom du fournisseurs :</label><br>
                    <input type="text" name="nom" value="<?php echo $row['nom']; ?>" required><br>
                    <label for="adresse">Adresse</label><br>
                    <input type="text" name="adresse" value="<?php echo $row['adresse']; ?>" required><br>
                    <label for="numero_telephone">Telephone</label><br>
                    <input type="int" name="numero_telephone" value="<?php echo $row['numero_telephone']; ?>" required><br>
                    
                    <input type="submit" value="Ajouter">
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
