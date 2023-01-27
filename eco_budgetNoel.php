<!--authors: SRIRAJ & TURRA-->
<!-- page politique : article budget noel-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                    //"http://localhost/PROJET/eco_budgetNoel.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>France : Un budget serré pour Noël cette année ? | The Daily Insider</title>
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
            <h4>France : Un budget serré pour Noël cette année ? </h4>
            <p class="maj">Mis à jour le 12/11/21 à 22h30</p>
            <br>
            <p>Avec la crise sanitaire durement éprouvante pour la France et les deux confinements qui ont eu lieu en mars et en automne 2020, l’économie mondiale et en particulier l’économie française a été profondément touchée. Elle redémarre assez difficilement et cela touche particulièrement la population française.</p>
            <br>
            <img class="images" src="img/cadeau_noel.jpg" alt="image des cadeaux de noel">
            <figcaption>Cadeaux de Noël.</figcaption>
            <br><br>
            <p><span class="lettrine">L</span>es fêtes de fin d’année (plus particulièrement Noël) sont grandement célébrées chaque année par la plupart des familles en France comme dans le monde entier. Cependant, selon plusieurs sondages qui ont été réalisés, près de la moitié des français prévoient de dépenser moins pour les cadeaux de Noël cette année.</p>
            <h5>Mais pourquoi cela ?</h5>
            <p>L’économie française a été touchée par le crise sanitaire de COVID-19 qui n’est malheureusement pas encore derrière nous. Actuellement, l'économie se reconstruit progressivement comme dans le monde entier.</p>
            <p>La demande étant donc en hausse avec cette reprise économique, cela entraîne la hausse des prix. Ainsi,on peut particulièrement noter que le prix des carburants et de l’énergie sont en augmentation. Et, cette inflation touche également le prix des produits alimentaires. </p>
            <p>En effet, aujourd'hui, les prix des denrées alimentaires sont aussi en augmentation. Cette hausse n'est pas uniquement causée par la reprise économique mais également à cause des situations de sécheresse, d’inondations qui sont de plus en plus importantes. En effet, cela rend l’activité agricole de plus en plus difficile et cette baisse de récolte est une cause majeure de la hausse des prix de certaines denrées alimentaires comme les céréales.</p>
            <p>Les familles doivent donc économiser au maximum et les cadeaux se feront donc moins cher cette année.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=4;
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