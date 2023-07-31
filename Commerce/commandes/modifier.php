<?php
include("../connexion.php");

if (isset($_GET['id_commande'])) {
    $id_commande = $_GET['id_commande'];

    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $date_commande = $_POST['date_commande'];
        $id_utilisateur = $_POST['id_utilisateur'];
        $moyen_livraison = $_POST['moyen_livraison'];
      

  

       $sql = "UPDATE commandes SET  id_utilisateur='$id_utilisateur', date_commande= '$date_commande', moyen_livraison = '$moyen_livraison' WHERE id_commande = '$id_commande'";

        if ($conn->query($sql) === TRUE) {
            echo "Les informations du commande ont été mises à jour avec succès.";
            header("location:affichage.php");
        } else {
            echo "Erreur lors de la mise à jour des informations du commandes: " . $conn->error;
        }
    }

    include("../connexion.php");
  
    $sql = "SELECT * FROM commandes  WHERE id_commande = '$id_commande' ";
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
                    <form method="post" action="modifier.php?id_commande=<?php echo $id_commande; ?>">
                    <label for="id_utilisateur">Id utilisateur :</label><br>
                    <input type="text" name="id_utilisateur" value="<?php echo $row['id_utilisateur']; ?>" required><br>
                    <label for="date_commande">Date de commandes</label><br>
                    <input type="date" name="date_commande" value="<?php echo $row['date_commande']; ?>" required><br>
                    <label for="moyen_livraison">moyen de livraison</label><br>
                    <select name="moyen_livraison" value="<?php echo $row['moyen_livraison']; ?>" required><br>
                        <option value="DHL">DHL</option>
                        <option value="Post">Post</option>
                        <option value="Express">Express</option>           
                    </select>
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
