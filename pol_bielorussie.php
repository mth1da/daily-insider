<!--authors: SRIRAJ & TURRA-->
<!-- page politique : article Pologne-Biélorussie-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
        //"http://localhost/PROJET/pol_bielorussie.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Frontière Pologne-Biélorussie : une attaque migratoire ? | The Daily Insider</title>
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
            <h4>Frontière Pologne-Biélorussie : une attaque migratoire ?</h4>
            <p class="maj">Mis à jour le 11/11/21 à 19h17</p>
            <br>
            <p>Depuis cet été, des milliers de migrants sont massés à la frontière entre la Pologne et la Biélorussie, aux portes de l'Union Européenne. Ils sont d’origine syrienne, irakienne, yéménite ou encore afghane et fuient la guerre, selon l’Agence de l’ONU pour les réfugiés.</p>
            <br>
            <img class="images" src="img/pologne.jpg" alt="image de soldats à la frontière de la pologne">
            <figcaption>La Pologne a envoyé des milliers de soldats à sa frontière avec la Biélorussie pour empêcher les migrants d’entrer. Près de Kuznica (Pologne), le 8 novembre 2021.</figcaption>
            <br><br>
            <p><span class="lettrine">F</span>ace à cette situation, l’UE soupçonne, et accuse, le président biélorusse Alexandre Loukachenko d’encourager et d’orchestrer cette véritable attaque migratoire : <i> "Des milliers de personnes migrantes sont utilisées, instrumentalisées, transportées en avion, puis en bus, massées aux frontières de plusieurs pays, la Lettonie, la Lituanie et plus récemment, et plus fortement, la Pologne" </i> , a affirmé Gabriel Attal, le Porte-Parole du gouvernement.</p>
            <p>Et, en effet, la compagnie biélorusse Belavia "<i>opère depuis le début du mois de novembre deux vols directs par semaine</i>" de Beyrouth, la capitale libanaise, vers Minsk en Biélorussie, <u><a class="blue" href="https://www.lemonde.fr/international/article/2021/11/10/comment-la-bielorussie-fait-venir-des-charters-de-migrants-pour-mettre-la-pression-sur-l-union-europeenne_6101625_3210.html" target="_blank"> rapporte Le Monde (article abonnés) </a></u>. "<i>Potentiellement, près de 400 passagers par semaine. Avant, il n'y avait qu'un vol hebdomadaire</i>", précise le quotidien.</p>
            <p>De plus, des ONG qui viennent en aide aux migrants sur place rapportent que les forces biélorusses aident les candidats à l'exil à franchir la frontière avec la Pologne avec des échelles ou en coupant les barbelés, et interdisent les migrants à rebrousser chemin.</p>
            <p>Cette crise intervient alors que l’Union Européenne avait mis en place l’année dernière des sanctions économiques contre la Biélorussie à la suite de la réélection d’Alexandre Loukachenko. Il est en effet accusé de mener une répression violence à l'égard de ses opposants politiques et de ses journalistes, mais au-delà de ça il est accusé d'avoir truqué cette élection.</p>
            <p>Alors que la Biélorussie nie toujours avoir commandité ce flux humain, Varsovie a définitivement validé le 29 octobre dernier le fait de construire un mur de près de 100km à la frontière avec la Biélorussie. Ce projet, qui est évalué à plus de 300 millions d’euros, ne serait pas financé par l’UE, a annoncé Ursula Von Der Leyen, la présidente de la Commission européenne.</p>
            <p>Mais Varsovie s’est-il trompé d’ennemi ? Est-il tombé dans le piège que lui tendait Loukachenko ? En attendant, près de 3 000 migrants sont arrivés depuis lundi à la frontière avec la Biélorussie et patientent dans un froid glacial, tandis que plus 10 000 personnes sur le territoire biélorusse seraient prêtes à traverser la frontière.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=2;
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