<!--authors: SRIRAJ & TURRA-->
<!-- page environnement : article Inondations Sri Lanka et Inde-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                    //"http://localhost/PROJET/env_inondations.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sri Lanka et Inde : Inondations au niveau du Tamil Nadu | The Daily Insider</title>
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
            <h4>Sri Lanka et Inde : Inondations au niveau du Tamil Nadu.</h4>
            <p class="maj">Mis à jour le 10/11/21 à 10h45</p>
            <br>
            Après d'importantes précipitations au Sri Lanka et en Inde (dans le Sud au niveau de Kodambakkam et de Chennai) , les deux pays font actuellement face à de grandes inondations meurtrières.
            <br><br>
            <h5>Les dégats humains</h5>
            <p><span class="lettrine">A</span>insi, au moins une dizaine de personnes seraient mortes ainsi qu’une dizaine de blessés dans les deux pays. On note également que des milliers de personnes se seraient déplacées chez des proches ou auraient été prises en charge dans des centres de secours au Sri Lanka et en Inde. Le gouvernement du Tamil Nadu en Inde a mis en place des mesures pour approvisionner les victimes. L’Inde lance une alerte rouge aux inondations jusqu’à demain et le pays recommande donc aux populations de se déplacer le moins possible.</p>
            <br><br>
            <img class="images" src="img/inondations_SL.jpg" alt="Carte des zones d'inondations au Sri Lanka">
            <figcaption>Zones d'inondations au Sri Lanka (au-dessus en rouge).</figcaption>
            <br><br>
            <img class="images" src="img/inondations_inde.jpg" alt="Carte des zones d'inondations en Inde">
            <figcaption>Zones d'inondations en Inde.</figcaption>
            <br><br>
            <h5>Les dégats matériels</h5>
            <p>Au niveau matériel, ces inondations ont également causé la destruction des nombreuses habitations en Inde et au Sri Lanka. Les routes sont également très inondées et rendent la circulation des voitures difficile. </p>
            <p>Habituellement, pendant cette période de l'année les deux pays font face à la mousson, mais les inondations ont été plus importantes cette année.</p>
            <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/aI8kSLDWhq8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <h5> Pourquoi les inondations ont été plus importantes cette année ?</h5>
            <p>L'eau suit un phénomène naturel qui est appelé le cycle hydrologique.Ce cycle trace le parcours continu de l'eau. Ainsi, l'eau va de la surface terrestre à l'atmosphère par l'évaporation au niveau des océans puis se transforme en nuage dans l'atmosphère et retombe sur la surface terrestre sous forme de pluie au niveau des cours d'eau ou sous forme de neige au niveau des montagnes. Au niveau des montagnes, l'eau fond et atteint finalement aussi les cours d'eau. Ces cours d'eau rejoignent ensuite les océans.</p>
            <br>
            <img src="img/cycle_eau.jpg" alt="Schéma du cycle de l'eau">
            <figcaption>Schéma du cycle de l'eau.</figcaption>
            <br>
            <p>Le réchauffement climatique perturbe ce cycle en provoquant par la chaleur une évaporation plus importante de l'eau. Cela entraîne ainsi une accélération du cycle et serait donc à l'origine de catastrophes comme les inondations. Ce qu'il s'est passé en Inde et en Sri Lanka seraient donc très probablement une conséquence du réchauffement climatique qui augmente dangereusement.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=7;
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