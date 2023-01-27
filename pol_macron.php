<!--authors: SRIRAJ & TURRA-->
<!-- page politique : article annonces du président-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
            //"http://localhost/PROJET/pol_macron.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>France : Covid-19, le discours d'Emmanuel Macron | The Daily Insider</title>
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
            <h4>France : Covid-19, le discours d'Emmanuel Macron</h4>
            <p class="maj">Mis à jour le 09/11/21 à 21h37</p>
            <br>
            Emmanuel Macron s’est adressé aux français ce mardi 9 Novembre à 20h pour faire un point sur la situation épidémique du pays.
            <br><br> 
            <img class="images"src="img/macron.jpg" alt="une image de Macron">
            <figcaption>Emmanuel Macron</figcaption>
            <!-- <u>La Première partie de son discours</u>-->
            <!--<b>Situation COVID-19 et mesures</b> --Donner un style background color= powderblue CSS-->
            <br><br>
            Le début de son discours était consacré à présenter la situation épidémique actuelle en France.</td>
            <br>
            <h5>COVID-19 en France et en Europe</h5>
            <ul style="list-style-type:disc">
                <li>51 Millions de français complètement vaccinés;</li>
                <li>situation inquiétante car la 5ème vague aurait commencé en Europe (au Royaume-Uni et en Allemagne plus de 30 000 nouveaux cas par jour sont enregistrés);</li>
                <li>recommandation aux 6 Millions de français qui n’ont encore reçu aucune dose à se vacciner. </li>
            </ul>
            <h5>Les Mesures prises pour éviter le confinement</h5>
            <p>D’après toutes les études, il y a une baisse de l’efficacité du vaccin <u> 6 mois après l’injection. </u> Pour solution, il souligne donc que :</p>
            <ul style="list-style-type:disc">
                <li>les + de 65 ans et les plus fragiles doivent recevoir une 3ème dose pour prolonger la validité du pass sanitaire à partir du 15 Décembre;</li>
                <li>une campagne de rappel de vaccination sera lancée pour les personnes âgées de 50 ans à 64 ans;</li>
                <li>le maintien du masque à l’école et le respect des gestes barrières resent de vigueur;</li>
                <li>un nouveau traitement réellement efficace contre les formes graves du Covid-19 devrait faire son arrrivée dès la fin de cette année.</li>
            </ul>
            <br><br><br>
            La seconde partie du discours était destinée à décrire les actions qui ont été réalisées durant la période de son quinquennat, et en particulier les actions réalisées pendant la crise sanitaire (repas à 1 euro, chômage partiel…). Puis il a annoncé les nouvelles annonces de la fin de son quinquennat.
            <br>
            <h5>Des nouvelles mesures pour la fin de son quinquennat</h5>
            <ul style="list-style-type:disc">
                <li>la construction de nouveaux réacteurs nucléaires;</li>
                <li>une modification au niveau des droits aux indemnisations chômages : à partir du 1er Décembre, les indemnisations sont accessibles uniquement aux personnes ayant travaillé au moins 6 mois les deux dernières années; </li>
                <li>la volonté d’atteindre le plein emploi;</li>
                <li>le report de la réforme de retraite;</li>
                <li>le prolongement des aides de l'Etat jusqu'en juin 2022.</li>
            </ul>
            <br>
            <iframe width="600" height="315" src="https://www.youtube.com/embed/wO4up2hOnjk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <figcaption class="description"> <i>Vidéo de l'OBS résumant le discours d'Emmanuel Macron.</i> </figcaption>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=3;
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