<!--authors: SRIRAJ & TURRA-->
<?php
include ("idconnect.php"); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd
include ("config_lang.php"); //fichier contenant les variables à imprimer selon la langue sélectionnée
include ("config_data.php");  //fichier contenant les données de l'utilisateur


$mail=$_SESSION["mail"]; //on récupère le mail de l'utilisateur connecté


//une fois qu'on a l'identifiant de l'article (récupéré grâce à la superglobale $GLOBALS[value_fav]) et l'identifiant de l'utilisateur (récupéré grâce à la superglobale $GLOBALS[id]), on ajoute les données dans la table favoris de la base de données
$sql="SELECT * FROM favoris WHERE id_article=$GLOBALS[value_fav] and id_user=$GLOBALS[id]";  
$result = $idcon->query($sql);
if ($result->num_rows > 0){ //condition : requete effectuée avec succès, l'article est déjà dans les favoris
    $heart="<i class='fa-solid fa-heart'></i>";  //on change le coeur en un coeur rempli
    $msgfav=$GLOBALS['suppfav']; //étant donné que l'article est dans les favoris, il est maintenant possible de le supprimer donc on imprime le message adapté
}
else {  //condition: l'article n'est pas dans les favoris
    $heart="<i class='fa-regular fa-heart'></i>"; //on change le coeur en un coeur "vide"
    $msgfav=$GLOBALS['ajtfav']; //étant donné que l'article n'est pas dans les favoris, il est maintenant possible de l'ajouter donc on imprime le message adapté
}


$idcon->close();

?>