<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données saisies par l'utilisateur
  $nom_utilisateur = $_POST["nom_utilisateur"];
  $email = $_POST["email"];
  $mot_de_passe = $_POST["mot_de_passe"];
  $confirm_mdp = $_POST["confirm_mdp"];
  $type_utilisateur = $_POST["role_utilisateur"];

if($confirm_mdp===$mot_de_passe){

 include("../connexion.php");
  // Préparer et exécuter la requête SQL pour insérer les données de l'utilisateur dans la base de données
  $sql = "INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe,role_utilisateur)
          VALUES ('$nom_utilisateur', '$email', '$mot_de_passe', '$type_utilisateur')";

  if ($conn->query($sql) === TRUE) {
    echo "enregistrement avec success !";

  } else {
    echo "Il y a une erreur sur l'enregistrement : " . $conn->error;
  }
}
else{
    echo"votre mot de passe ne corespond pas !";
    header("location:ajoututilisateur.php");
}
  // Fermer la connexion à la base de données
  $conn->close();
}
?>
