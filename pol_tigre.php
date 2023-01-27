<!--authors: SRIRAJ & TURRA-->
<!-- page politique : article Conflit du Tigré-->
<?php
session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
            //"http://localhost/PROJET/pol_tigre.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Conflit du Tigré : les États-Unis se prononcent | The Daily Insider</title>
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
            <h4>Conflit du Tigré : les États-Unis se prononcent</h4>
            <p class="maj">Mis à jour le 12/11/21 à 17h22</p>
            <br>
            Washington a imposé ce vendredi 12 novembre des sanctions contre l’Érythrée, alliée de l’Éthiopie dans le conflit du Tigré, mettant en garde contre « l’implosion » du pays d’Abiy Ahmed en cas d’échec d’une solution négociée.
            <br><br>
            <img class="images" src="img/ethiopie_tigre_3.jpg" alt="carte de l’Ethiopie et du Tigré">
            <figcaption>Carte de l'Ethiopie et du Tigré</figcaption>
            <br><br>
            <p> <span class="lettrine">D</span>epuis un an, une guerre civile ravage le deuxième pays le plus peuplé d’Afrique : l’Éthiopie. Le 4 novembre 2020, le gouvernement éthiopien, dirigé par le premier ministre Abiy Ahmed, a mené des opérations militaires pour reprendre contrôle de la région du Tigré, au nord du pays, qui est sous le contrôle du Front de Libération de peuple du Tigré (TPLF). Cette semaine marque donc le 1<sup>er</sup> anniversaire des combats.</p>
            <p>À l’époque, le déclenchement du conflit avait été peu médiatisé à cause de la présidentielle américaine. Mais aujourd’hui, les combats font toujours rage : les troupes du Tigré gagnent du terrain et contrôlent désormais Dessie et Kombolcha, deux villes stratégiques situées à 400km de la capitale Addis Abeba. Ce qui était au départ une guerre limitée au Tigré devient ainsi un conflit étendu à tout le territoire éthiopien.</p>
            <p>Selon l’ONU, qui a communiqué un rapport la semaine dernière, il s’agit d’un conflit d’une brutalité extrême où les deux camps seraient responsables de crimes contre l’humanité : massacres de civils, enlèvements, tortures, violences sexuelles, etc.  Cette guerre civile est aussi à l’origine d’une grave crise humanitaire : plus de 400.000 personnes ont dû quitter leur domicile et seraient touchées par la famine.</p>
            <p>C’est dans ce contexte que le secrétaire d’État américain Antony Blinken a appelé vendredi à de nouvelles discussions entre Addis Abeba et les rebelles. Une absence d’accord entre les parties « conduirait à l’implosion de l’Éthiopie et aurait des conséquences sur d’autres pays dans la région », a-t-il estimé. Le gouvernement américain a autant condamné le TPLF que le Premier ministre Abiy Ahmed.</p>
            <p>Le président Joe Biden avait ouvert la voie en septembre à des sanctions contre tous les protagonistes du conflit. Mais celles imposées vendredi visent uniquement l’Érythrée, pays voisin, qui a soutenu militairement Addis Abeba en envoyant des troupes au Tigré. Washington <i>"veut donner du temps et de l’espace pour voir si les discussions peuvent progresser"</i>, justifie Blinken.</p>
            <p>Ces derniers jours, les diplomates étrangers ont intensifié leurs efforts pour tenter d’implémenter un cessez-le-feu. L’ex-président nigérian Olusegun Obasanjo et le diplomate américain Jeffrey D. Feltman se sont rendus en Éthiopie cette semaine.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=1;
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


