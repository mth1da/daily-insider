<!--authors: SRIRAJ & TURRA-->
<?php
//définition des variables pour la connexion à la base de données
//lors des appels à ces variables, on utilisera les superglobales $GLOBALS

$host='localhost';
$user='root';
$mdpasse='';
$bdd='dailyinsider';
$port=3306;


$idcon= new mysqli ($host, $user, $mdpasse, $bdd, $port);
if ( $idcon->connect_errno ){
    exit ("Impossible de se connecter à la base de données'$bdd' à cause de l'erreur suivante : " . $idcon->connect_error ."." ) ;
}

$idcon->close();
?>