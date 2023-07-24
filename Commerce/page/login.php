<?php
 include("../connexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $email=$_POST["email"];
    $mot_de_passe= $_POST["mot_passe"];
    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
    $result = mysqli_query($conn, $sql);
    
    
    if (mysqli_num_rows($result) > 0) {
    
        $_SESSION['email'] = $email;
        header("Location: ../Utilisateurs.php");
    } else {

        echo "Nom d'utilisateur ou mot de passe incorrect";
        header("refresh:2; url=../index.html");
    }
    
    mysqli_close($conn);
    
}
?>
