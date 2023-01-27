<!--authors: SRIRAJ & TURRA-->
<?php
//déconnexion de l'utilisateur lorqu'il clique sur le bouton Se déconnecter/Log out

  session_start(); 
  session_destroy(); //on ferme la session
  header("Location: $_SESSION[accueil]");  // on redirige vers la page accueil.php
  die();
?>