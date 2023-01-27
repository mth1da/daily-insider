<!--authors: SRIRAJ & TURRA-->
<!--page d'accueil-->
<?php session_start(); // on commence la session pour garder les informations de session
$_SESSION['accueil'] = $_SERVER['SCRIPT_NAME']; //"http://localhost/PROJET/accueil.php"; //on stocke l'url de la page d'accueil dans une variable de session (utile pour se rediriger vers la page d'accueil lors de la connexion)
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>The Daily Insider</title>
        <link rel="stylesheet" href="sheets/stylesheet.css">
        <script src="https://kit.fontawesome.com/ccd7bb19ea.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php
        if(isset($_SESSION["mail"])){  //si un utilisateur est connecté, la variable $_SESSION est définie donc on affiche le header_utilisateur
		    include_once("header_utilisateur.php");
            include_once('config/config_lang.php');  //on inclus le fichier config_lang.php qui contient les variables à imprimer selon la langue sélectionnée
            include_once('config/config_data.php');
            echo "<div class='msg'>".$GLOBALS['msg'].$GLOBALS['prenom'].$GLOBALS['exclamation']."</div>"; //on affiche le prénom indiqué dans la base de données
	    }
	    else{ //sinon, on affiche le header normal
            include_once('header.php');
        }
        
    ?>
        <br>
        
        <table class="mosaique" border="1">
            <tr>
                <th rowspan="6"><?php echo $GLOBALS['titre1']; ?></th>  <!--appel à la variable $titre1 qui est contenue dans config_lang.php-->
            </tr>
            <tr>
                <td colspan="4" rowspan="3">
                    <a href="env_inondations.php">
                        <img src="img/fil_actu/inondations.jpg" alt="inondations en inde et sri lanka" width="100%">
                        <h3>Sri Lanka et Inde : Inondations au niveau du Tamil Nadu</h3>
                        <p>Après d'importantes précipitations au Sri Lanka et en Inde, les deux pays font face à de grandes inondations meurtrières.</p>
                    </a>
                </td>
                <td>
                    <a href="soc_autriche.php">
                        <h3>Autriche : Confinement pour les non-vaccinés</h3>
                        <p>Le chancelier Alexander Schallenberg annonce le confinement obligatoire des personnes non vaccinées à partir de lundi.</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="soc_shuai.php">
                        <h3>Chine : Disparition inquiétante de Peng Shuai</h3>
                        <p>La sportive a accusé de viol un haut placé du Parti Communiste chinois. Depuis, elle n'a plus donné signe de vie.</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="sport_france_kazak.php">
                        <h3>France-Kazakhstan : les Bleus qualifiés pour la Coupe du Monde 2022</h3>
                        <p>En s’imposant face au Kazakhstan (8-0), la France a gagné son ticket d'entrée pour la prochaine Coupe du Monde.</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td colspan="3" rowspan="2">
                    <a href="soc_joggeuse.php">
                        <img src="img/fil_actu/JOGGEUSE.jpg" width=100%>
                        <h3>France : Joggeuse retrouvéee vivante après sa disparition</h3>
                        <p>A-t-elle été enlevée ?</p>
                    </a>
                </td>
                <td colspan="2" rowspan="2">
                    <a href="div_couturissime.php">
                        <img src="img/fil_actu/mugler.jpg" alt="image de l'affiche de l'exposition" width="100%">
                        <h3>Thierry Mugler : Couturissime</h3>
                        <p>Retour en images sur l'exposition du couturier qui a révolutionné la mode.</p>
                    </a>
                </td>
            </tr>
        </table>

        <table class="mosaique" border="1">
            <tr>
                <th rowspan="6"><?php echo $GLOBALS['titre2']; ?></th>
            </tr>
            <tr>
                <td colspan="4" rowspan="3">
                    <a href="pol_bielorussie.php">
                        <img src="img/fil_actu/pol_migration.jpg" alt="biélorussie" width="100%">
                        <h3>Frontière Pologne-Biélorussie : une attaque migratoire ?</h3>
                        <p>La vague soudaine de migrants aux portes de la Pologne laisse à croire à une véritable attaque migratoire orchestrée par la Biélorussie.</p>
                    </a>
                </td>
                <td>
                    <a href="eco_budgetNoel.php">
                        <h3>France : Un budget serré pour Noël cette année ?</h3>
                        <p>La crise sanitaire a laissé bien des séquelles, et l'économie française n'y échappe pas.</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="div_murdeberlin.php">
                        <h3>Flashback : la Chute du Mur</h3>
                        <p>Le 9 novembre 1989, de nombreux allemands provoquaient la chute du Mur de Berlin.</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="eco_tesla.php">
                        <h3>Elon  Musk vend pour 5 milliards de dollars d'actions Tesla</h3>
                        <p>Elon Musk a vendu ce lundi 8 Novembre 2021 environ 5 Milliards de Dollars d’actions TESLA</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">
                    <a href="env_cop.php">
                        <img src="img/fil_actu/cop26_logo_2.jpg" alt="logo de la cop26" width="100%">
                        <h3>Monde : Réchauffement climatique et COP26</h3>
                        <p>Cette année la COP26 s'est tenue à Glasgow pour mettre en place des mesures environnementales.</p>
                    </a>
                </td>
                <td colspan="2" rowspan="2">
                    <a href="pol_tigre.php">
                        <img src="img/fil_actu/tigre.jpg" alt="image de manifestants contre le conflit au tigré" width="100%">
                        <h3>Conflit du Tigré : les Etats-Unis se prononcent</h3>
                        <p>Washington a imposé vendredi des sanctions contre l’Érythrée.</p>
                    </a>
                </td>
                <td>
                    <a href="pol_macron.php">
                        <h3>France : Covid-19, le discours d'Emmanuel Macron</h3>
                        <p>Retour point par point sur l'allocution du président.</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="env_baleine.php">
                        <h3>France : Une baleine a été retrouvée sur le port de Calais</h3>
                        <p>Ce samedi 6 Novembre, une baleine de 19 mètres de long a été retrouvée morte sur le port de Calais.</p>
                    </a>
                </td>
            </tr>
        </table>
        <br><br>

        <?php include("footer.php"); ?>  <!--on affiche le footer-->
    </body>
</html>
