<!--authors: SRIRAJ & TURRA-->
<!--page économie-->
<?php session_start();
$_SESSION['url'] = "http://localhost/PROJET/economie.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Economie | The Daily Insider</title>
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
        include_once('config/config_lang.php'); //include_once le fichier qui contient les variables dans la langue sélectionnée
    ?>
        <table class="tableau">
            <th rowspan="3"><?php echo $eco; ?></th>
            <tr>
                <td>
                    <a href="eco_budgetNoel.php"><img src="img/fil_actu/noel.jpg" alt="images de cadeaux de noel" class="picture"></a>
                </td>
                <td>
                    <a href="eco_budgetNoel.php" class="pre"> France : un budget sérré pour noël cette année ?</a>
                    <p>Mis à jour le 13/11/2021</p>
                    <br><br>
                    <p class="paratexte">Après la crise sanitaire durement éprouvante pour la France avec les deux confinements qui ont eu lieu en mars et en automne 2020, l’économie mondiale et en particulier l’économie française a été profondément touchée...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="eco_tesla.php"><img src="img/fil_actu/Elon_Musk.jpg" alt="photo de Elon Musk" class="picture"></a>
                </td>
                <td>
                    <a href="eco_tesla.php" class="pre"> Elon Musk vend pour 5 Milliards de dollars d'actions Tesla</a>
                    <p>Mis à jour le 14/11/2021</p>
                    <br><br>
                    <p class="paratexte">Elon Musk, directeur général de la société TESLA (spécialisée dans la construction de voitures électriques ), a vendu ce lundi 8 novembre environ 5 Milliards de dollars d’actions TESLA.</p>
                </td>
            </tr>
        </table>
        <br>

        <?php include_once("footer.php"); ?>
    </body>
</html>