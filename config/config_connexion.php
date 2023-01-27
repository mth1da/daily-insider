<!--authors: SRIRAJ & TURRA-->
<?php
//vérification des données de l'utilisateur lors de sa connexion

session_start(); //on commence une session


include_once("config_lang.php"); //fichier contenant les variables à imprimer selon la langue sélectionnée
include_once("config_alert.php");  //fichier contenant la fonction alert()
include_once('idconnect.php'); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd

#importation des données du formulaire de inscription.php
$rep= $_POST["mail"];  //on affecte l'adresse mail de connexion/ pseudo (entrée par l'utilisateur) à la variable $mail
$tentmdp= $_POST["motdepasse"]; //on affecte la tentative de mot de passe de connexion (entré par l'utilisateur) à la variable $mdp
$previous_page = $_SESSION["url"];

$sql1 = " SELECT * FROM user WHERE mail_user='$rep' AND mdp_user='$tentmdp' ";  //requête SQL pour sélectionner la ligne correspondant à l'adresse mail et au mot de passe entrés
$sql2= " SELECT * FROM user WHERE pseudo_user='$rep' AND mdp_user='$tentmdp' ";  //requête SQL pour sélectionner la ligne correspondant au pseudo et au mot de passe entrés
$resultat1 = $idcon->query ($sql1) ;  //le résultat de la requête 1
$resultat2 = $idcon->query ($sql2) ; //le résultat de la requête 2

$nb_ligne1=$resultat1->num_rows;   //nombre de ligne(s) obtenue(s) de la requête SQL 1
$nb_ligne2=$resultat2->num_rows;   //nombre de ligne(s) obtenue(s) de la requête SQL 2

if (($nb_ligne1!=1) && ($nb_ligne2!=1)){ //condition : si il n'y a aucune ligne qui correspond à l'adresse mail/pseudo et au mot de passe entrés ($nb_ligne sera différent de 1)
	$message=$GLOBALS['connex']; //on affiche un message d'erreur
	alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
}
elseif ($nb_ligne1==1){
	for ($l=0;$l<strlen($GLOBALS['mdp']);$l++){   //pour i allant de 0 à la longueur de la chaine-1
		if ((ctype_upper($tentmdp[$l]) && ctype_lower($GLOBALS['mdp'][$l])) || (ctype_upper($GLOBALS['mdp'][$l]) && ctype_lower($tentmdp[$l]))) { //on compare chaque caractère du mot de passe entré et de celui de notre compte (majuscule /minuscule)
			$message=$GLOBALS['connex']; //on affiche un message d'erreur
			alert($message,$previous_page);
			die(); //on sort du programme
		}
	}
	$_SESSION['mail']=$rep;  //sinon on crée la variable $_SESSION['mail'] qui est égale à $rep
	header("Location: $_SESSION[accueil]"); // on redirige vers la page acceuil.php
	}
elseif ($nb_ligne2==1){ //si il y a une ligne qui contient le pseudo et le mot de passe entrés
	$sql="SELECT mail_user from user where pseudo_user='$rep'"; //on récupère le mail associé
	if ($result=$idcon->query($sql)){
		$data=$result->fetch_assoc();
		$mail=$data['mail_user'];
	}
	$_SESSION['mail']=$mail;  //on crée la variable $_SESSION['mail'] qui est égale à $mail
	include_once("config_data.php"); //fichier contenant les données de l'utilisateur
	for ($l=0;$l<strlen($tentmdp);$l++){   //pour i allant de 0 à la longueur de la chaine-1
		if ((ctype_upper($tentmdp[$l]) && ctype_lower($GLOBALS['mdp'])) || (ctype_upper($GLOBALS['mdp']) && ctype_lower($tentmdp[$l]))) { //on compare chaque caractère du mot de passe entré et de celui de notre compte (majuscule /minuscule)
			$message=$GLOBALS['connex'];  //si l'un est en majuscule et l'autre est en minuscule ou l'inverse, on envoie un message d'erreur
			alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
			die(); //on sort du programme
		}
	}
	
	header("Location: $_SESSION[accueil]"); // on redirige vers la page accueil.php
}
else{
	$message=$GLOBALS['erreurco']; //on affiche un message d'erreur
	alert($message,$previous_page);
}

$idcon->close() ;
?>