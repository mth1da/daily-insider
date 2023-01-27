<!--authors: SRIRAJ & TURRA-->
<!-- page environnement-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Environnement | The Daily Insider</title>
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
    <?php include_once('config/config_lang.php'); //include_once le fichier qui contient les variables dans la langue sélectionnée ?>
        <table class="tableau">
            <th rowspan="4"><?php echo $env; ?></th>
            <tr>
                <td>
                    <a href="env_cop.php"><img src="img/fil_actu/COP26_logo.jpg" alt="logo de la cop26" class="picture"></a>
                </td>
                <td>
                    <a href="env_cop.php" class="pre">monde : réchauffement climatique et cop26</a>
                    <p>Mis à jour le 11/11/2021</p>
                    <br><br>
                    <p class="paratexte">Le réchauffement climatique est au cœur de nos préoccupations. En effet, si le monde suit les engagements climatiques actuels, la température est susceptible d’augmenter...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="env_inondations.php"><img src="img/fil_actu/inondations.jpg" alt="photo de l'inondation en inde/sri lanka" class="picture"></a>
                </td>
                <td>
                    <a href="env_inondations.php" class="pre"> sri lanka et inde : inondations au niveau du tamil nadu</a>
                    <p>Mis à jour le 10/11/2021</p>
                    <br><br>
                    <p class="paratexte">Après d'importantes précipitations au Sri Lanka et en Inde (dans le Sud au niveau de Kodambakkam et de Chennai), les deux pays ...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="env_baleine.php"><img src="img/fil_actu/baleine.jpg" alt="Image de la baleine à Calais" class="picture"></a>
                </td>
                <td>
                    <a href="env_baleine.php" class="pre"> france : baleine retrouvée sur le port de calais</a>
                    <p>Mis à jour le 8/11/2021</p>
                    <br><br>
                    <p class="paratexte">Ce Samedi 6 Novembre 2021, à environ 12h une baleine de 19 mètres de long a été retrouvée morte sur le port de Calais après s’être blessée...</p>
                </td>
            </tr>
        </table>

        <br>
        <?php include_once("footer.php"); ?>
    </body>
</html>