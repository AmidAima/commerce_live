<!DOCTYPE html>
<html>
<head>
  <title>Ajouter un utilisateur</title>
  <link rel="stylesheet" href="home.css" class="css">
</head>
<body>
  <h1>Gestion de produits electroniques</h1>
  <div class="navbar">
    <ul>
    <li class="dropdown">
          <a href="#" class="dropbtn">Produits</a ><div class="dropdown-content">
          <a href="./produits/afichage.php">Aficher les produits electroniques</a>
          <a href="./produits/ajoutproduits.php">Ajouter produits</a>
            </div>
      </li>
    </ul>
    <ul>
    <li class="dropdown">
        <a href="#" class="dropbtn">fournisseurs</a ><div class="dropdown-content">
        <a href="./fournisseurs/affichage.php">Listes des fournisseurs</a>
        <a href="./fournisseurs/ajout.php">Ajouter des fournisseurs</a>
          </div>
      </li>
    </ul>
    <ul> 
       <li class="dropdown">
         <a href="#" class="dropbtn">Facture</a ><div class="dropdown-content">
          <a href="./facture/affichage.php">Afficher facture</a>
          <a href="./facture/ajout.php">ajouter liste facture</a>
        </div>
      </li>
    </ul >  
     <ul>
      <li class="dropdown">
        <a href="#" class="dropbtn">Commandes</a ><div class="dropdown-content">
          <a href="./commandes/affichage.php">Commandes des client</a>
          
          <a href="./commandes/ajout.php">Ajouter des commandes</a>
        </div>
      </li>
    </ul >
    <ul>
       <li class="dropdown">
       <a href="#" class="dropbtn">Details commandes</a ><div class="dropdown-content">
         <a href="./detail/details.php">ajout details</a>
         <a href="./detail/affichage.php">details commandes</a>
       </li>  
    </ul>
   <ul><li class="dropdown">
   <a href="#" class="dropbtn">Deconnecter</a><div class="dropdown-content">
     <a href="destroy.php">vous voulez deconnecter?</a></li></ul>
    </div>
  <aside class="right-aside">
    <h3>Qu'est ce que vous voulez ici?</h3 >
    <ol>
      
   <li><p>veux tu voir tous les produits electroniques?<a href="./produits/afichage.php"> clique ici</a></p></li>
   <li><p>Veux tu voir tous les fournisseurs des notre produits electroniques?<a href="./fournisseurs/affichage.php">clique ici</a></p></li>
   <li><p>veux tu afficher les factures?<a href="./facture/affichage.php"> clique ici</a></p></li>
   <li><p>veux tu voir tous les  commandes des clients?<a href="./commandes/affichage.php"> clique ici</a></p></li>
   
  </ol>
  <ul>
    <li><h4>Cette information peut satisfaire votre besoin ?</h4></li>
  </ul>
  </aside>
  <!-- Reste du code... -->
</body>
</html>
