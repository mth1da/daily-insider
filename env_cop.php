<!--authors: SRIRAJ & TURRA-->
<!-- page environnement : article cop26-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                    //"http://localhost/PROJET/env_cop.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Réchauffement climatique et COP26 | The Daily Insider</title>
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
            <h4>Réchauffement climatique et COP26.</h4>
            <p class="maj">Mis à jour le 11/11/21 à 14h45</p>
            <br>
            Si le monde suit ses engagements climatiques actuels, la température globale est susceptible d’augmenter de +1,5°C dans quelques années, d’après une étude du GIEC (Groupe d'experts Intergouvernemental), qui aurait des conséquences dévastatrices et irréversibles pour le monde. C’est pourquoi est organisée la COP 26, qui réunit cette année encore 196 pays, dans un objectif de faire diminuer le réchauffement climatique.
            <br><br>
            <img class="images" src="img/COP26.jpg" alt="logo de la COP26">
            <figcaption>Logo de la COP26.</figcaption>
            <br><br>
            <p><span class="lettrine">L</span>e réchauffement climatique provoque des effets visibles dans le monde entier. En effet, différents pays du monde font déjà face à des catastrophes naturelles de plus en plus fréquentes comme les inondations, les incendies de forêts (provoqués par la chaleur), les situations de sécheresses, les tempêtes ou encore les ouragans.  comme l'arrivée de l'ouragan Ida en Louisiane cette année.</p>
            <br><br>
            <img class="images" src="img/ouragan_ida.jpeg" alt="Image de l'ouragan Ida">
            <figcaption>Images de l'ouragan Ida, en Louisiane.</figcaption>
            <br><br>
            <p>Les conséquences sont très accentuées au niveau de l’eau. Le réchauffement climatique entraîne en effet une augmentation de l’évaporation de l’eau puisque la chaleur est plus forte, ce qui perturbe le cycle hydrologique naturel. Cela est donc à l’origine de la multiplication des catastrophes liées à l’eau.</p>
            <p><u>Sans mesures strictes prises par les différents pays, le réchauffement climatique continuerait d’augmenter et provoqueraient l’accentuation de ces effets déjà dévastateurs.</u></p>
            <p>La COP 26 qui devait normalement se dérouler l'an dernier, a été reportée à cette année en raison de la crise sanitaire. Elle réunit actuellement plusieurs pays dans un objectif de mettre en place des mesures visant à faire diminuer le réchauffement climatique et de veiller à ce que les engagements pris par les états soient bien respectés. Elle se déroule à Glasgow en Écosse, en partenariat avec l’Italie. Les mesures prises sont, entre autres, la limitation des émissions de gaz-à-effet de serre qui sont à l’origine du réchauffement planétaire.</p>
            <p>Afin de réduire les gaz à effets de serre, toute la population doit se mobiliser. Ainsi, se déplacer le plus possible en vélo ou faire du covoiturage au lieu de prendre la voiture pourrait réduire les émissions de CO2, qui est l'un des principaux gaz-à-effet de serre à l'origine du réchauffement climatique.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=6;
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