<!--authors: SRIRAJ & TURRA-->
<!-- page politique-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Politique | The Daily Insider</title>
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
        include_once('config/config_lang.php');
    ?>
        <br>
        
        <table class="tableau">
            <th rowspan="4"><?php echo $pol; ?></th>
            <tr>
                <td>
                    <a href="pol_tigre.php"><img src="img/fil_actu/tigre.jpg" alt="tigré" class="picture"></a>
                </td>
                <td>
                    <a href="pol_tigre.php"class="pre"> conflit du tigré : les états-unis se prononcent</a>
                    <p>Mis à jour le 12/11/2021</p>
                    <br><br>
                    <p class="paratexte">Washington a imposé ce vendredi 12 novembre des sanctions contre l’Érythrée, alliée de l’Éthiopie dans le conflit du Tigré, mettant en garde contre « l’implosion » du pays d’Abiy Ahmed en cas d’échec d’une solution négociée...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="pol_bielorussie.php"><img src="img/fil_actu/pol_migration.jpg" alt="photo des migrants en biélorussie" class="picture"></a>
                </td>
                <td>
                    <a href="pol_bielorussie.php" class="pre">frontière pologne-biélorussie : une attaque migratoire ?</a>
                    <p>Mis à jour le 11/11/2021</p>
                    <br><br>
                    <p class="paratexte">Depuis cet été, des milliers de migrants sont massés à la frontière entre la Pologne et la Biélorussie, aux portes de l'Union Européenne...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="pol_macron.php"><img src="img/fil_actu/macron.jpeg" alt="photo du président" class="picture"></a>
                </td>
                <td>
                    <a href="pol_macron.php" class="pre"> france : covid-19, le discours d'emmanuel macron</a>
                    <p>Mis à jour le 09/11/2021</p>
                    <br><br>
                    <p class="paratexte">Emmanuel Macron s’est adressé aux français ce mardi 9 Novembre à 20h pour faire un point sur la situation épidémique du pays...</p>
                </td>
            </tr>
        </table>
        <br><br>

        <?php include_once("footer.php"); ?>
    </body>
</html>
