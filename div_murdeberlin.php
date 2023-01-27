<!--authors: SRIRAJ & TURRA-->
<!-- page divers : flashback 9 nov 89-->
<?php session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
//"http://localhost/PROJET/div_murdeberlin.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Flashback : 9 novembre 1989 | The Daily Insider</title>
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
            <h4>Flashback : la chute du Mur.</h4>
            <p class="maj">Mis à jour le 9/11/21 à 9h14</p>
            <br>
            <p>Il y 32 ans jour pour jour, le 9 novembre 1989, de nombreux allemands provoquaient la chute du Mur de Berlin, symbole de la division politique qui, pendant plus de 28 ans, a déchiré la RDA (République Démocratique Allemande) et la RFA (République Fédérale Allemande).</p>
            <br><br>
            <img class="images" src="img/chute_mur_berlin.jpg" alt="photo de la chute du mur de berlin">
            <figcaption>La chute du Mur de Berlin, dans la nuit du 9 novembre 1989.</figcaption>
            <br><br>
            <p><span class="lettrine">D</span>ans la nuit du 9 au 10 novembre 1989, devant les caméras du monde entier, de jeunes Allemands, avertis par les médias ouest-allemands de la décision des autorités est-allemandes de ne plus soumettre le passage en RFA à une autorisation préalable donnée au compte-gouttes, brisent le "Mur de la Honte". Les Berlinois de l'Est se répandent alors par milliers dans Berlin-Ouest, dont l'accès leur a été interdit pendant près de trente ans, depuis l'édification du Mur le 13 août 1961.</p>
            <p>La chute du Mur est rendue possible par une succession d'évènements dans les Républiques populaires de Pologne et de Hongrie, par la nouvelle politique de l'URSS vis-à-vis des pays de l'Est instaurée par Mikhaïl Gorbatchev depuis 1985, par la montée des manifestations contre le régime et la reprise d'une émigration massive affectant la RDA les mois précédantdes, par les décisions prises ce jour là par les dirigeants est-allemands et par la mobilisation spontanée des habitants de Berlin-Est. </p>
            <p>Cet évènement annonce la chute prochaine de l'URSS et des régimes communistes en Europe de l'Est, et marque symboliquement la fin de la guerre froide entre les blocs de l'Est et de l'Ouest. </p>
            <p>Cependant, la chute du Mur de Berlin met l’Allemagne en grande difficulté économique. L’Allemagne de l’Ouest se trouve incapable d’aider sa jumelle de l’Est, sous développée et épuisée financièrement. Helmut Kohl, chancelier allemand de 1982 à 1998, demande alors l’aide de ses partenaires européens pour favoriser la réunification allemande. En échange, François Mitterrand propose à l’Allemagne de réaliser l’Europe politique. En avril 1990, le projet de l’Union européenne est mis sur pieds. Il sera approuvé un an plus tard à Maastricht et entrera en vigueur fin 1993.</p>
            <br><br>

            <?php
                
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=15;
                    include_once("config/config_heart.php");
                   
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