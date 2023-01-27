<!--authors: SRIRAJ & TURRA-->
<?php
//définition de la langue des variables à imprimer selon la langue sélectionnée
//lors des appels à ces variables, on utilisera les superglobales $GLOBALS

    if(isset($_POST['lang'])){  //si le bouton lang est selectionné
        if ($_POST['lang']=='french'){  // si on a sélectionné Francais
            $_SESSION['lang'] = 'french';   //on définit la variable de session en francais
        }
        elseif ($_POST['lang']=='english'){    //si on a sélectionné English
            $_SESSION['lang'] = 'english';  //on définit la variable de session en anglais
        }
    }

    //ici on voulait faire en sorte de sélectionner une langue par défaut pour le compte en ajoutant une colonne lang_user à la table user
    //et ça marchait !
    //mais lorqu'on voulait changer de langue avec le bouton submit et la méthode post, une fois qu'on changeait de page la langue revenait à celle sélectionnée par défaut pour le compte
    //par la suite on a supprimé la colonne lang_user dans la table user
    /*else if (isset($_SESSION["mail"])){ //si l'utilisateur est connecté
        include ('idconnect.php');
        $mail=$_SESSION['mail'];
        $sql="SELECT lang_user from user WHERE mail_user='$mail'";
        $result=$idcon->query($sql);
        $data=$result->fetch_assoc();
        if ($data["lang_user"]=="fr" ){ //on récupère la langue qui est dans la bdd
            $_SESSION['lang'] = 'french';
        }
        else if ($data["lang_user"]=="en"){ //on récupère la langue qui est dans la bdd
            $_SESSION['lang'] = 'english';
        }
    }*/
    elseif (!isset($_SESSION['lang'])){    //si aucun bouton n'est sélectionné, par défaut on définit la variable de session en francais
        $_SESSION['lang'] = 'french';
    }


   if($_SESSION['lang'] == 'french'){ //si la variable de session en francais
       include_once('fr.php'); //on fait appel au fichier fr.php qui contient les variables en francais
   }
   elseif ($_SESSION['lang'] == 'english'){ //si la variable de session en anglais
       include_once('en.php'); //on fait appel au fichier en.php qui contient les variables en anglais
   }
?>