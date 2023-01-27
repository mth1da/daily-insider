<!--authors: SRIRAJ & TURRA-->
<!-- page société : article Confinement en Autriche-->
<?php
session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
//"http://localhost/PROJET/soc_autriche.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Autriche : Confinement pour les non-vaccinés. | The Daily Insider</title>
        <link rel="stylesheet" href="sheets/stylesheet.css">
        <script src="https://kit.fontawesome.com/ccd7bb19ea.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php
        if(isset($_SESSION["mail"])){  //si un utilisateur est connecté, la variable $_SESSION est définie donc on affiche le header_utilisateur
		    include_once("header_utilisateur.php");
	    }
	    else{
            include_once('header.php');
        }
    ?>
        
        <div class="blocktext">
            <h4>Autriche : Confinement pour les non-vaccinés.</h4>
            <p class="maj">Mis à jour le 14/11/21 à 23h20</p>
            <br>
            Le chancelier d’Autriche Alexander Schallenberg annonce le confinement obligatoire des personnes non vaccinées à partir de ce lundi 15/11 car le nombre de nouvelles contaminations est en forte augmentation.
            <br><br>
            <img class="images" src="img/chancelier-autrichien.jpg" alt="Chancelier d'Autriche">
            <figcaption>Chancelier d'Autriche lors de la conférence de presse du 14 Novembre 2021.</figcaption>
            <br><br>
            <p><span class="lettrine">E</span>n Autriche, on compte donc plus de 13 000 nouveaux cas de contaminations enregistrés ce samedi 13/11 ce qui est très inquiétant.Et,il y a environ 65% de la population autrichienne qui a reçu les deux doses de vaccin. Ce chiffre est nettement inférieur à la moyenne européenne (en effet, en France par exemple, environ 75% de la population a reçu les deux doses de vaccin). Le chancelier d'Autriche a donc qualifié ce pourcentage de "honteusement bas".</p>
            <br><br>
            <img class="images" src="img/taux_incidence_autriche.png" alt="taux d'incidence covid">
            <figcaption> Carte et graphique présentant le taux d'incidence de COVID-19 en Autriche.</figcaption>
            <br><br>
            <p>Ainsi les personnes non-vaccinées ou non guéries du COVID-19 ne pourront sortir de chez elles que pour faire des courses, du sport ou pour des soins médicaux. Cette mesure s’applique pour toutes les personnes non-vaccinées qui ont 12 ans et plus.</p>
            <p>Des contrôles sévères seront effectués et les personnes qui ne respecteront pas les mesures risqueraient une amende de 500 euros et 1450 euros en cas de refus de contrôles ou de paiement. Cette mesure permettrait de contenir la propagation du virus et inciterait le plus de personnes à se faire vacciner rapidement.</p>
            <p>Dans une dizaine de jours, le gouvernement autrichien évaluera l'effet de cette mesure selon le ministre de la santé Wolfgang Mückstein. Ainsi, avec les fêtes de fin d'année qui arrivent très rapidement le mois prochain, le gouvernement veut "obliger" une grande majorité de la population non-vaccinées à recevoir les doses s'ils veulent circuler librement dans le pays.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=9;
                    include_once ("config/config_heart.php");
                   
                    echo "<br><br><form action='config/config_fav.php' method='post'>
                            <button class='fav' type='submit' name='fav' value='$value_fav'>".$heart."</button>
                            <p style='font-size:14px'>".$msgfav."</p>
                        </form>";
                }
            ?>
        </div>

        <?php include_once("footer.php"); ?>
            
    </body>
</html>
