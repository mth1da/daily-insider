<!--authors: SRIRAJ & TURRA-->
<?php
//définition de la moyenne d'age des utilisateurs

include_once("idconnect.php"); //fichier contenant les identifiants pour accéder à notre base de données
include_once ("config_data.php"); //fichier contenant les données de l'utilisateur
include_once ("config_lang.php"); //fichier contenant les variables à imprimer selon la langue sélectionnée

function MoyAge(){
    $idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd

    $sql="SELECT naissance_user FROM user"; //requete sql pour cherche les dates de naissance de tous les utilisateurs
    $result=$idcon->query($sql);
    $array=[];  //creation d'un tableau pour stocker les dates de naissance
    while ($row=$result->fetch_array()){
        $array[]=$row['naissance_user'];
    }
    $sum=0; //initialisation de la variable somme pour compter la moyenne d'age
    $compteur=0;  //initialisation de la variable compteur pour compter le nombre de tours = nombre de lignes dans le tableau = nombre d'utilisateurs
    foreach ($array as $date_naissance) {   //parcours du tableau
        $yo=(date_diff(date_create($date_naissance),date_create(date("Y-m-d"))))->format("%y"); //calcul de l'age grâce à la date de naisssance et stocké dans la variable yo (years old)
        $sum+=$yo;
        $compteur+=1;
        
    }
    $moy=round($sum/$compteur);  //calcul de la moyenne d'age des utilisateurs. on utilise round pour arrondir la valeur
    echo $moy.".<br>"; //on imprime la moyenne d'age
    if ($moy<35){   //si la moyenne est inférieure à 35ans,
        echo $GLOBALS['moy1'];  //on imprime un petit message personnalisé et toujours en fonction de la langue selectionnée (définie dans config_lang.php)
    }
    elseif (($moy>=35) && ($moy<90)){
        echo $GLOBALS['moy2'];   //on imprime un petit message personnalisé toujours en fonction de la langue selectionnée (définie dans config_lang.php)
    }
    elseif ($moy>=90){
        echo $GLOBALS['moy3'];   //on imprime un petit message personnalisé toujours en fonction de la langue selectionnée (définie dans config_lang.php)
    }
}
?>