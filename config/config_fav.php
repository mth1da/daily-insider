<!--authors: SRIRAJ & TURRA-->
<?php
//gestion des articles favoris

session_start();
include ("idconnect.php"); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd
include ("config_alert.php");  //fichier contenant la fonction alert()
include ("config_lang.php"); //fichier contenant les variables à imprimer selon la langue sélectionnée
include ("config_data.php"); //fichier contenant les données de l'utilisateur

$fav= $_POST["fav"]; //on récupère l'identifiant de l'article
//$mail=$_SESSION["mail"]; //on récupère le mail de l'utilisateur connecté

//on récupère l'identifiant de l'utilisateur grâce à la superglobale $GLOBALS contenue dans config_data.php
//une fois qu'on a l'identifiant de l'article et l'identifiant de l'utilisateur, on ajoute les données dans la table favoris de la base de données
$sql="INSERT INTO favoris (id_user, id_article) VALUES ($GLOBALS[id], $fav)";
if ($idcon->query($sql)){ //condition : l'ajout aux favoris est effectuée avec succès
    $message=$GLOBALS['alertajtfav']; // appel au message stocké dans config_lang.php (article ajouté aux favoris avec succès)
    $previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php; l'utilisateur revient à la page précédante
    
}
else { //condition : l'ajout aux favoris n'est pas possible, ce qui veut dire que l'article est déjà ajouté dans les favoris pour cet utilisataur car la clé primaire de la table favoris (composée de id_article et id_user) est unique 
    $del="DELETE FROM favoris WHERE id_article=$fav and id_user=$GLOBALS[id]";  // donc on supprime l'article des favoris
    $idcon->query($del);
    $message=$GLOBALS['alertsuppfav']; // appel au message stocké dans config_lang.php (article supprimé des favoris avec succès)
    $previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php; l'utilisateur revient à la page précédante
}


$idcon->close();

?>