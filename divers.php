<!--authors: SRIRAJ & TURRA-->
<!-- page divers-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Divers | The Daily Insider</title>
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
        include_once('config/config_lang.php'); //include le fichier qui contient les variables dans la langue sélectionnée
    ?>

        <table class="tableau">
            <th rowspan="3"><?php echo $div; ?></th>
            <tr>
                <td>
                    <a href="div_couturissime.php"><img src="img/fil_actu/mugler.jpg" alt="Exposition Couturissime_Thierry Mugler" class="picture"></a>
                </td>
                <td>
                    <a href="div_couturissime.php" class="pre"> France : Thierry Mugler, Couturissime</a>
                    <p>Mis à jour le 13/11/2021</p>
                    <br><br>
                    <p class="paratexte"> Retour en images sur l'exposition du couturier qui a révolutionné la mode.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="div_murdeberlin.php"><img src="img/fil_actu/mur_berlin.jpg" alt="Image du mur de Berlin" class="picture"></a>
                </td>
                <td>
                    <a href="div_murdeberlin.php" class="pre"> flashback : la chute du mur</a>
                    <p>Mis à jour le 09/11/2021</p>
                    <br><br>
                    <p class="paratexte"> Il y 32 ans jour pour jour, de nombreux allemands provoquaient la chute du Mur de Berlin...</p>
                </td>
            </tr>

        </table>
        <br><br>

        <?php include_once("footer.php"); ?>
    </body>
</html>