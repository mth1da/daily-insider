<!--authors: SRIRAJ & TURRA-->
<!-- page société-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Société | The Daily Insider</title>
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

        <?php include_once('config/config_lang.php'); //include le fichier qui contient les variables dans la langue sélectionnée ?> 
        <table class="tableau">
            <th rowspan="4"><?php echo $soc; ?></th>
            <tr>
                <td>
                    <a href="soc_autriche.php"><img src="img/fil_actu/AUTRICHE.jpg" alt="chancelier allemand" class="picture"></a>
                </td>
                <td>
                    <a href="soc_autriche.php" class="pre"> autriche : confinement pour les non-vaccinés</a>
                    <p>Mis à jour le 14/11/2021</p>
                    <br><br>
                    <p class="paratexte">Le chancelier d’Autriche Alexander Schallenberg annonce le confinement obligatoire des personnes non vaccinées à partir de ce lundi 15/11...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="soc_shuai.php"><img src="img/fil_actu/peng_shuai.jpg" alt="photo de peng shuai" class="picture"></a>
                </td>
                <td>
                    <a href="soc_shuai.php" class="pre"> Chine : la disparition inquiétante de peng shuai</a>
                    <p>Mis à jour le 14/11/2021</p>
                    <br><br>
                    <p class="paratexte">Depuis les accusations de viol à l’encontre de l'ancien vice-premier ministre chinois Zhang Gaoli, la sportive n'a plus donné signe de vie, provoquant une vague d'inquiétudes...</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="soc_joggeuse.php"><img src="img/fil_actu/JOGGEUSE.jpg" alt="Image des policiers cherchant la joggeuse" class="picture"></a>
                </td>
                <td>
                    <a href="soc_joggeuse.php" class="pre"> france : joggeuse retrouvée vivante après sa disparition, a-t-elle été enlevée ?</a>
                    <p>Mis à jour le 13/11/2021</p>
                    <br><br>
                    <p class="paratexte">Lisa, adolescente de 17 ans, avait disparu le lundi 8 Novembre à Saint-Brice, en Mayenne, après être sortie faire du jogging en forêt vers 16h...</p>
                </td>
            </tr>
        </table>

        <br><br>
        <?php include_once("footer.php"); ?>
    </body>
</html>