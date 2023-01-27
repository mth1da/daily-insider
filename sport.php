<!--authors: SRIRAJ & TURRA-->
<!-- page sport-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sport | The Daily Insider</title>
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
            <th rowspan="3"><?php echo $sport; ?></th>
            <tr>
                <td>
                    <a href="sport_france_kazak.php"><img src="img/fil_actu/Coupe-du-monde-2022.jpg" alt="image des bleus" class="picture"></a>
                </td>
                <td>
                    <a href="sport_france_kazak.php" class="pre">France-Kazakhstan : les Bleus qualifiés pour la Coupe du Monde 2022</a>
                    <p>Mis à jour le 14/11/2021</p>
                    <br><br>
                    <p class="paratexte">En s’imposant face au Kazakhstan (8-0), la France a gagné son ticket d'entrée pour la prochaine Coupe du Monde.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="sport_giro.php"><img src="img/fil_actu/giro.jpg" alt="egan bernal" class="picture"></a>
                </td>
                <td>
                    <a href="sport_france_kazak.php" class="pre">Italie : Giro 2022, le parcours dévoilé</a>
                    <p>Mis à jour le 12/11/2021</p>
                    <br><br>
                    <p class="paratexte">Les organisateurs du Giro 2022 ont progressivement dévoilé les étapes du parcours qui se déroulera du 6 Mai au 29 Mai 2022.</p>
                </td>
            </tr>
        </table>
        <br>
        
        <?php include_once("footer.php"); ?>
    </body>
</html>
