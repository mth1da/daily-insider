<!--authors: SRIRAJ & TURRA-->
<!-- page sport : article France-Kazakhstan-->
<?php 
session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
        // "http://localhost/PROJET/sport_france_kazak.php"; 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>France-Kazakhstan : les Bleus qualifiés pour la Coupe du Monde 2022 | The Daily Insider</title>
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
            <h4>France-Kazakhstan : les Bleus qualifiés pour la Coupe du Monde 2022</h4>
            <p class="maj">Mis à jour le 14/11/21 à 00h37</p>
            <br>
            L’équipe de France a obtenu sa qualification pour la prochaine Coupe du monde en s’imposant, samedi soir, face au Kazakhstan au Parc des Princes (8-0). Une très large victoire, assez rare pour être soulignée.
            <br><br>
            <img class="images" src="img/france_kazak.jpg" alt="image de l'équipe de France">
            <figcaption>L'Equipe de France savoure sa victoire ce samedi 13 novembre au Parc des Princes.</figcaption>
            <br><br>
            <p><span class="lettrine">L</span>e public du Parc des Princes a eu l’occasion de travailler les jambes, samedi 13 novembre. À peine se rasseyait-il sur son siège qu’il devait à nouveau se lever pour fêter les buts en pagaille inscrits par l’équipe de France contre le Kazakhstan. La rencontre a permis aux Bleus de valider leur ticket pour la prochaine Coupe du monde, au Qatar, qui se déroulera du 21 novembre au 18 décembre 2022.</p>
            <p>En s’imposant avec huit buts d’écart, les joueurs de Didier Deschamps se sont amusés face à des Kazakhstanais médusés et ont remporté le plus large succès de l’équipe de France depuis sept ans et un match amical disputé contre la Jamaïque, le 8 janvier 2014 (8-0). Mais aussi et surtout, le plus large succès des Tricolores en compétition officielle depuis le 6 septembre 1995 et une rencontre de qualifications pour l’Euro contre l’Azerbaïdjan (10-0).</p>
            <p><i>"Je ne vais pas parler de soirée parfaite, mais on essaie toujours de se rapprocher de la perfection et ça y a ressemblé avec ce que tous les joueurs ont mis"</i>, a expliqué Deschamps, conscient de l’implication de ses joueurs, en conférence de presse après le match. En respectant le jeu, les Bleus ont également servi leurs coéquipiers mieux placés avant de penser à eux-mêmes.</p>
            <p><i>"Kylian [Mbappé] aurait pu mettre un quintuplé mais il a préféré laisser Antoine [Griezmann] tirer le penalty. Les joueurs offensifs se sont partagés le bonheur de l’efficacité"</i>, a souligné le sélectionneur. Auteur d’un quadruplé, le premier de la part d’un joueur de l’équipe depuis Just Fontaine en 1958, Mbappé a été le symbole de cette équipe de France joueuse, prête à se battre de la première à la dernière minute et altruiste, avec une passe décisive pour Benzema en seconde période.</p>
            <p>Avec ce sens de la perfection, les Bleus s’évitent une finale difficile à jouer en Finlande, mardi 16 novembre, et concluent de la meilleure des manières une campagne de qualifications durant laquelle ils se sont souvent compliqués la tâche.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=12;
                    include_once("config/config_heart.php");
                   
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
