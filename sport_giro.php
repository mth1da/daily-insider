<!--authors: SRIRAJ & TURRA-->
<!-- page sport : article Giro-->
<?php 
    session_start(); 
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                    //"http://localhost/PROJET/sport_giro.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Italie : Giro 2022, le parcours dévoilé. | The Daily Insider</title>
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
            <h4>Italie : Giro 2022, le parcours dévoilé.</h4>
            <p class="maj">Mis à jour le 12/11/21 à 21h50</p>
            <br>
            Le Giro d'Italia s'élancera de Budapest, en Hongrie, départ initialement prévu en 2020 et modifié à cause de la pandémie. Il rejoindra la péninsule après trois jours et laissera les sprinteurs s'exprimer assez largement, tout en proposant de nombreuses étapes vallonnées. 
            <br><br>
            <img class="images" src="img/giro2022.png" alt="carte parcours du giro 2022">
            <figcaption>Carte présentant le parcours du Giro 2022.</figcaption>
            <br><br>
            <p><span class="lettrine">C</span>ommençant le 6 mai 2022, la 105<sup>ème</sup> édition du Giro promet beaucoup. Le parcours se compose de 21 étapes, et débutera à Budapest, en Hongrie. Après trois jours, les cyclistes rejoindront la péninsule en mettant pieds à Avola, en Sicile. A partir de là, ils suivront une étape difficile et devront s'attaquer aux pentes de l’Etna. Le lendemain, ils resteront sur la côte Est de l'île en partant de Catane pour rejoindre Messine en passant par le Portella Mandrazzi, une étape relativement calme : 17km de montée à moins de 5% en moyenne.</p>
            <p>Ensuite, le peloton du Giro quitte la Sicile pour la terre ferme et s'aventure au sud du pays. Avec une fois encore peu de monts, les coureurs rapides pourront être récompensés sur la côte tyrrhénienne. Passant par la Calabre, le parcours prévoit une étape intense à Naples, où les cyclistes devront parcourir cinq fois un circuit de 19km, avant d'arriver en bord de mer.</p>
            <p>Pour la 9<sup>ème</sup> étape, il faudra gravir le Blockhaus, haut de 2142m. L'ultime montée s'annonce sans répis avec 13.6 km à 8.4%. A partir de là, les coureurs traverseront la plaine du Pô, dernière ligne plate, qui favorisera les sprinteurs.</p>
            <p>En rejoignant le nord du pays, les montées se feront de plus en plus importantes, avec par exemple le Passo del Bocco, ou encore le Monte Becco, avant de redescendre vers Gênes. Repartant de Sanremo, les cyclistes rejoindront le Colle di Nava, avant de rejoindre la plaine de Cuneo. Très attendue, l'étape qui relie Santena et Turin proposera 3 500m de dénivelé positif en seulement 153 km, où les parties de plat seront extrêmement rares.</p> 
            <p>Le parcours prévoit ensuite de passer par Cogne, Salo, Aprica et Ponte di Legno, qui réserve une belle descente de 70km. La dernière étape pour sprinteurs s'achèvera à Trévise au bout d'un parcours qui mettra à l'honneur les vignobles du Prosecco et le sanctuaire de Castelmonte, et d'un ultime circuit final autour de la cité vénitienne. Du reste, la dernière semaine se déroulera en grande partie dans les Dolomites et mènera le peloton jusqu'à Vérone et non Milan, la ville-arrivée traditionnelle du Giro.</p>
            <h5>Qui a remporté la course en 2021 ?</h5>
            <img class="images" src="img/egan.jpg" alt="Image de Egan Bernal">
            <figcaption>Egan Bernal, vainqueur du Giro 2021</figcaption>
            <p>L'année dernière, la course a débuté à Turin et s’est terminée à Milan. La course a été remportée par le grand champion colombien Egan Bernal.</p>
            <br><br>
            <?php 
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=13;
                    include ("config/config_heart.php");
                   
                    echo "<br><br><form action='config/config_fav.php' method='post'>
                            <button class='fav' type='submit' name='fav' value='$value_fav'>".$heart."</button>
                            <p style='font-size:14px'>".$msgfav."</p>
                        </form>";
                }
            ?>
        </div>

        <?php include("footer.php"); ?>
            
    </body>
</html>
