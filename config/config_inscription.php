<!--authors: SRIRAJ & TURRA-->
<?php
//vérification de l'entrée des champs 'genre' et 'date de naissance' lors de l'inscription
// et insertion des données entrées dans la table 'user'

session_start();
include_once ('idconnect.php'); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd
include_once ('config_lang.php'); ///fichier contenant les variables à imprimer selon la langue sélectionnée
include_once ('config_alert.php'); //fichier contenant la fonction alert()

 
#creation du pseudo tel que : prénom de l'utilisateur suivi de la première lettre du nom de famille suivi des 2 derniers chiffres de sa date de naissance
function defpseudo($var1,$var2,$var3){
    $idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd
    $pseudo=$var1.$var2[0].date_format(date_create($var3),"y");
    
    $verifpseudo="SELECT * FROM user WHERE (pseudo_user LIKE '$pseudo%')"; //si on a déjà le même pesudo présent dans la base de données
    $result=$idcon->query($verifpseudo);
    $count=$result->num_rows;
    if ($count != 0){
        $pseudo.="-0".$count; //on ajoute à la fin du pseudo -0
    }
    return $pseudo;
}


if (!isset($_POST["sexe"])){  //condition : si aucune case n'a été cochée pour la ligne 'genre'
	$message=$GLOBALS['inscrip2']; //on affiche un message d'erreur
	$previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php;
}
elseif (empty($_POST["naissance"])){ //condition : si la date de naissance n'a pas été renseignée
	$message=$GLOBALS['inscrip1']; //on affiche un message d'erreur
	$previous_page = $_SESSION["url"]; //on récupère l'url de la page précédante
    alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
}
else{ //sinon, on stocke les données dans les variables appropriées
	$sexe= $_POST["sexe"];  // on récupère dans la variable $sexe, la valeur (value) de l'élément qui a été coché
	if ($sexe=="feminin"){  // condition par rapport à la variable $sexe
		$sexe=$_POST["sexe"]="F"; //si $sexe="feminin" on affecte "F" à la variable $sexe car dans notre table SQL on a définit le domaine de la colonne sexe_user en VARCHAR(1)
	}
	else{
		$sexe=$_POST["sexe"]="H"; //sinon on affecte "M" à la variable sexe
	}

	$nom= strtolower($_POST["name"]);  //on recupère en minuscule dans la variable $nom ce qui est entré pour la ligne Nom
	$prenom =strtolower($_POST["Prenom"]); //on récupère en minuscule dans la variable $prenom ce qui est entré pour la ligne Prenom
	$continent= $_POST["continent"]; //on récupère dans la variable $continent la valeur (value) correspondant au continent sélectionné
	$mail= strtolower($_POST["email"]);  //on récupère dans la variable $mail ce qui est entré pour la ligne Adresse Mail
	$mdp= $_POST["mdp"]; //on récupère dans la variable $mdp ce qui est entré pour la ligne Mot de passe
	$naissance= $_POST["naissance"]; // on stocke dans la variable $naissance la date de naissance renseignée
	$pseudo=defpseudo($prenom,$nom,$naissance); //on récupère le pseudo généré par la fonction defpseudo()

	$sql = " INSERT INTO user (nom_user, prenom_user, sexe_user,naissance_user,continent_user, mail_user, mdp_user, pseudo_user) VALUES ('$nom', '$prenom', '$sexe', '$naissance', '$continent', '$mail', '$mdp', '$pseudo')"; //requête SQL pour insérer un enregistrement à la table user
	if ($idcon->query($sql)){ //condition : l'enregistrement est effectué avec succès
		$nom=strtoupper($nom[0]).substr($nom,1,strlen($nom));  //on avait enregistré les nom et prénom en minuscule dans la bdd donc on affecte maintenant une majuscule pour la première lettre
    	$prenom=strtoupper($prenom[0]).substr($prenom,1,strlen($prenom));
		$message=$GLOBALS['inscrip4'].$prenom." ".$nom.$GLOBALS['inscrip5'].$pseudo.$GLOBALS['inscrip6'];
		$previous_page = $_SESSION["url"];  //on récupère l'url de la page précédante
    	alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
	}
	else {  // puisque toutes les conditions sont vérifiées avant l'insertion, et qu'on a définit l'adresse mail comme clé primaire unique alors si l'enregistrement ne peut pas être effectué cela signifie que l'adresse mail a déjà été inséré avant
		$message=$GLOBALS['inscrip3']; //on affiche un message d'erreur
		$previous_page = $_SESSION["url"];  //on récupère l'url de la page précédante
    	alert($message,$previous_page); //appel à la fonction alert() créée dans config_alert.php
	}
}





$idcon->close() ; //on ferme la connexion SQL


//ALTER TABLE latable AUTO_INCREMENT=1 (pour réinitialier l'auto-incrément)
//mysqli_error($idcon) pour voir l'erreur si l'enregistrement ne peut pas être effectué
?>