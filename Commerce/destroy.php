<?php
session_start(); // Démarre la session

// Code de déconnexion
session_destroy(); // Détruit session actuelle

// Redirige l'utilisateur vers la page de connexion ou une autre page appropriée
header("Location: index.html");
exit();
?>
