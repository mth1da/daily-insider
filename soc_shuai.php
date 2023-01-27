<!--authors: SRIRAJ & TURRA-->
<!-- page politique : article Peng Shuai-->
<?php
session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
//"http://localhost/PROJET/soc_shuai.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Peng Shuai : une disparition inquiétante | The Daily Insider</title>
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
            <h4>Peng Shuai : une disparition inquiétante</h4>
            <p class="maj">Mis à jour le 14/11/21 à 19h01</p>
            <br>
            Depuis les accusations de viol à l’encontre de l'ancien vice-premier ministre chinois Zhang Gaoli, la sportive n'a plus donné signe de vie, provoquant une vague d'inquiétudes.
            <br><br>
            <img class="images" src="img/peng_shuai.jpg" alt="photo de Peng Shuai">
            <figcaption>Peng Shuai s'entrainant à Melbourne, le 13 janvier 2019</figcaption>
            <br><br>
            <p> <span class="lettrine">U</span>ne semaine après les révélations détaillées de la joueuse de tennis Peng Shuai, 35 ans, sur le rapport sexuel forcé qu’elle a eu il y a trois ans avec Zhang Gaoli, 75 ans, qui a été de 2013 à 2018 l'un des hommes politiques les plus puissants de Chine, la jeune femme a disparu. L'accusation explosive a été brièvement postée le 2 novembre sur le compte Weibo (équivalent chinois de Facebook ou Twitter) officiel de la joueuse, notamment lauréate du tournoi de double de Roland-Garros en 2014.</p>
            <p>Si la censure a rapidement fait disparaître le message de l'internet chinois, des captures d'écran se sont néanmoins répandues comme une traînée de poudre. Dans son message, Peng Shuai racontait que M. Zhang lui avait imposé un rapport sexuel tandis que son épouse montait la garde à l’extérieur.</p>
            <p>L'AFP n'a pas été en mesure de déterminer si le message a bien été écrit par Peng Shuai et son entourage s'est refusé à tout commentaire depuis. Mais plus inquiétant encore, la principale concernée elle-même n'a plus publié de message, ni même donné tout simplement de signe de vie. Le silence total de la jeune femme laisse craindre le pire à son sujet. Zhang Gaoli n'a, pour sa part, pas réagi publiquement.</p>
            <p>La WTA (association des joueuses de tennis) s'est exprimée dimanche dans un communiqué par l'intermédiaire de son PDG Steve Simon, en indiquant que <i>"les récents événements en Chine concernant une joueuse de la WTA, Peng Shuai, sont très préoccupants". "Son accusation concernant la conduite d'un ancien dirigeant chinois, impliquant une agression sexuelle, doit être traitée avec le plus grand sérieux"</i>, assure l'Américain dans ce texte, qui réclame que <i>"justice soit faite"</i>.</p>
            <p>Ces dernières années, la Chine a connu plusieurs scandales dans le cadre de la vague #MeToo, mais la censure et le contrôle de la justice par le Parti communiste chinois (PCC) ont empêché le mouvement de prendre de l’ampleur. De telles accusations de viol ont, par le passé, visé des vedettes de la chanson ou du petit écran, mais n’ont jamais touché un dirigeant aussi haut placé au sein du PCC. </p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=10;
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