<!--authors: SRIRAJ & TURRA-->
<!-- page économie : article Elon Musk-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                    //"http://localhost/PROJET/eco_tesla.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Elon Musk vend pour 5 Milliards de dollars d'actions Tesla | The Daily Insider</title>
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
            <h4>Elon Musk vend pour 5 Milliards de dollars d'actions Tesla.</h4>
            <p class="maj">Mis à jour le 11/11/21 à 11h30</p>
            <br>
            Elon Musk, directeur général de la société TESLA (spécialisée dans la construction de voitures électriques ), a vendu ce lundi 8 novembre environ 5 Milliards de dollars d’actions TESLA.
            <br><br>
            <img class="images" src="img/musk.jpg" alt="Image montrant Elon Musk">
            <figcaption>Elon Musk.</figcaption>
            <br><br>
            <p><span class="lettrine">E</span>n effet, Elon Musk avait demandé il y a quelques jours à ses followers sur twitter s’il devait se séparer ou non de 10% de ses actions, et le sondage avait été majoritairement positif (57,9% de oui). Le milliardaire n’a pas attendu longtemps pour vendre environ 5 milliards de dollars d’actions TESLA.</p>
            <p>Ce mercredi 10 Novembre, la SEC (Securities and Exchange Commission), qui est l'organisme fédéral américain de réglementation et de contrôle des marchés financiers, a ainsi publié des documents rapportant que Elon Musk a commencé à vendre une grande partie de ses 10% d’actions comme il l’avait annoncé. Bien que cela semble beaucoup, 10% ne représente en fait qu'une petite partie de son immense fortune.</p>
            <p>En réalité, le sondage n’a eu aucun impact sur la décision. En effet, le sondage n'est pas la cause de sa décision de vendre, car les documents de la SEC révèlent également qu'il avait déjà déclenché la vente au mois de septembre.</p>
            <p>Ainsi, le fondateur de Tesla a réalisé cette action pour répondre à des obligations fiscales, notamment pour payer ses impôts. Les 5 milliards de dollars ne sont donc qu’un début, et ce nombre risque d’augmenter encore d’ici la fin de la semaine. </p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=5;
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