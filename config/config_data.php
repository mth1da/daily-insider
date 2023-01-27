<!--authors: SRIRAJ & TURRA-->
<?php
//définition des variables correspondant aux données de l'utilisateur
//lors des appels à ces variables, on utilisera les superglobales $GLOBALS

include ('idconnect.php'); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd

$mail=$_SESSION['mail'];
$sql="SELECT * from user WHERE mail_user='$mail'"; //requete sql pour obtenir toutes les données de l'utilisateur connecté
if($result=$idcon->query($sql)){    //condition : la modification est effectuée avec succès
    while($data=$result->fetch_assoc()){    //on stocke chaque donnée dans une variable
        $id=$data['id_user'];
        $nom=$data['nom_user'];
        $prenom=$data['prenom_user'];
        $sexe=$data['sexe_user'];
        $naissance=$data['naissance_user'];
        $continent=$data['continent_user'];
        $mail=$data['mail_user'];
        $mdp=$data['mdp_user']; 
        $pseudo=$data['pseudo_user'];
    }
    $nom=strtoupper($nom[0]).substr($nom,1,strlen($nom));  //on avait enregistré le nom en minuscule dans la bdd donc on affecte maintenant une majuscule pour la première lettre
    $prenom=strtoupper($prenom[0]).substr($prenom,1,strlen($prenom)); //resp. prénom
    $age=(date_diff(date_create($naissance),date_create(date("Y-m-d"))))->format("%y"); //calcul de l'age grâce à la date de naisssance
}

?>