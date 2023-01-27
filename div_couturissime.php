<!--authors: SRIRAJ & TURRA-->
<!-- page divers : article Couturissime-->
<?php session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
//"http://localhost/PROJET/div_couturissime.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thierry Mugler, Couturissime : Une exposition qui se conjugue au superlatif | The Daily Insider</title>
        <link rel="stylesheet" href="sheets/stylesheet.css">
        <script src="sheets/scriptsheet.js" language="javascript" type="text/javascript"></script>
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
            <h4><i>Thierry Mugler, Couturissime</i> : Une exposition qui se conjugue au superlatif</h4>
            <p class="maj">Mis à jour le 13/11/21 à 14h37</p>
            <br>
            C'est l'une des expositions mode les plus attendues de l'année. La grande rétrospective Thierry Mugler : Couturissime, qui prenait vie au Musée des Beaux-Arts de Montréal en mars 2019 avant de tracer sa route à Rotterdam et Munich, avec toujours autant de succès, s’est installée depuis le 30 septembre au sein des murs du Musée des Arts Décoratifs de Paris, et ce jusqu'au 24 avril 2022.
            <br><br>
            <img class="images" src="img/couturissime/couturissime_1.jpg" alt="affiche de l'exposition">
            <figcaption>Collection « La Chimère », haute couture automne-hiver 1997-1998. Photo : Alan Strutt</figcaption>
            <br><br>
            <p> <span class="lettrine">A</span>ccompagnée d’une scénographie riche en sensations, l’exposition célèbre les créations spectaculaires de Thierry Mugler en donnant à voir un total de 140 tenues conçues entre 1973 et 2001, mais aussi ses parfums culte, des photographies et croquis rares, sans oublier le fruit de ses multiples collaborations artistiques dans le domaine du spectacle, de la musique et du cinéma. De sa Chimère à sa femme robot futuriste, avec Mugler, tout est extravagant : chapeaux surdimensionnés, perruques fluo, poitrine aérodynamique, robes moulées, corsets rutilants, décolleté-fesses, autant de caractéristiques qui dessinent son style.</p>
            <p>Retour en images sur les pièces de l'artiste qui a fait de sa mode une célébration du spectaculaire.</p>
            <br>
            <img class="images" src="img/couturissime/couturissime_2.jpg" alt="collection les insectes">
            <figcaption>Collection « Les Insectes », haute couture automne-hiver 1997-1998. Photo : Fatou Sylla</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_3.jpg" alt="collection les insectes">
            <figcaption>Collection « Les Insectes », haute couture automne-hiver 1997-1998. Photo : Mathilde Turra</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_4.jpg" alt="collection les atlantes">
            <figcaption>Collection « Les Atlantes », prêt-à-porter printemps-été 1989. Photo : Fatou Sylla</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_5.jpg" alt="collection les méduses">
            <figcaption>Collection « Les Méduses », haute couture automne-hiver 1999-2000. Photo : Fatou Sylla</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_6.jpg" alt="collection hiver buick">
            <figcaption>Collection « Hiver Buick », prêt-à-porter automne-hiver 1989. Photo : Fatou Sylla</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_7.jpg" alt="collection ritz">
            <figcaption>Collection « Ritz », haute couture automne-hiver 1992-1993. Photo : Mathilde Turra</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_9.jpg" alt="collection les tranches">
            <figcaption>Collection « Les Tranchés », haute couture printemps-été 1999. Photo : Mathilde Turra</figcaption>
            <br><br>
            <img class="images" src="img/couturissime/couturissime_10.jpg" alt="collection jeu de paume">
            <figcaption>Collection « Jeu de Paume », haute couture printemps-été 1999. Photo : Fatou Sylla</figcaption>
            <br>
            <p><a href="https://madparis.fr/couturissime" target="_blank"><u><i>Thierry Mugler : Couturissime</i>, du 30 septembre 2021 au 24 avril 2022, Musée des Arts Décoratifs de Paris, 107 rue de Rivoli, 75001 Paris</u></a></p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=14;
                    include_once ("config/config_heart.php"); //on inclu le fichier qui définit le type de coeur à afficher (rempli ou pas)
                   
                    echo "<br><br><form action='config/config_fav.php' method='post'>
                            <button class='fav' type='submit' name='fav' value='$value_fav'>".$heart."</button>
                            <p style='font-size:14px'>".$GLOBALS['msgfav']."</p>
                        </form>";
                }
            ?>
            
        </div>


        <?php include_once("footer.php"); ?>
            
    </body>
</html>