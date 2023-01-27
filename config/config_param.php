<!--authors: SRIRAJ & TURRA-->
<?php
//validation et mise en place du nouveau mot de passe de l'utilisateur

session_start();
include_once ("config_alert.php"); //fichier contenant la fonction alert()
include_once ("config_data.php"); //fichier contenant les données de l'utilisateur
include_once('config_lang.php'); //fichier contenant les variables à imprimer selon la langue sélectionnée
include_once("idconnect.php"); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd

$mail=$_SESSION["mail"]; //on récupère le mail de l'utilisateur connecté
$pwd=$_POST["mdp"]; //on recupère le nouveau mot de passe du formulaire

if ($pwd==$GLOBALS['mdp']){  //si le mot de passe entré dans le formulaire est identique à celui stocké dans la base de données, impression du message
    $message=$GLOBALS['param1']; //on affiche un message qui indique que le nouveau mot de passe doit être différent du mot de passe actuel
	$previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
}
else{   //sinon,  on execute la requete sql pour modifier le mot de passe dans la base de données
    $sql="UPDATE user SET mdp_user='$pwd' WHERE mail_user='$mail'";
    $res=$idcon->query($sql);
    if ($idcon->query($sql)){ //condition : la modification est effectuée avec succès
        $message=$GLOBALS['param2']; //on affiche un message de prise en compte
		$previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    	alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.phpecho $param2
    }
    else {   //condition : la modification n'est pas effectuée avec succès
        $message=$GLOBALS['param3']; //on affiche un message d'erreur
		$previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    	alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
    }
}

$idcon->close() ; //on ferme la connexion SQL

?>