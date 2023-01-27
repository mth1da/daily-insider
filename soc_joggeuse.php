<!--authors: SRIRAJ & TURRA-->
<!-- page société : article joggeuse-->
<?php
session_start();
$_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
//"http://localhost/PROJET/soc_joggeuse.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Joggeuse retrouvéee vivante en Mayenne, a-t-elle été enlevée ? | The Daily Insider</title>
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
            <h4>Joggeuse de 17 ans retrouvée vivante après sa disparition en Mayenne, a-t-elle été enlevée ?</h4>
            <p class="maj">Mis à jour le 13/11/21 à 12h49</p>
            <br><br>
            <img class="images" src="img/gendarmes_joggeuse.jpg" alt="les gendarmes retrouevnt la jeune fille">
            <figcaption>Image des gendarmes qui ont retrouvé la joggeuse. Photo : Jean-François Monier</figcaption>
            <br><br>
            <p> <span class="lettrine">L</span>isa, adolescente de 17 ans, avait disparu le lundi 8 Novembre à Saint-Brice, en Mayenne, après être sortie faire du jogging en forêt vers 16h. Ses parents avaient alerté les autorités dans la soirée. Quelques-uns de ses effets personnels ont été retrouvés et un homme a été interpellé par les gendarmes à la fin de la journée. Près de 200 gendarmes auraient été mobilisés pour la retrouver.</p>
            <p>La jeune fille a ensuite été retrouvée le lendemain dans la soirée dans un kebab à Sablé-sur-Sarthe. Elle était effrayée et en état de choc. Elle avait donné une première version selon laquelle elle avait été enlevée par deux hommes qui l'auraient emportée dans une camionnette verte. Ils l’auraient frappée puis séquestrée dans une maison. Elle aurait ensuite réussi à s'échapper et se serait réfugiée dans le restaurant.</p>
            <p>Mais ce vendredi, la jeune fille a avoué avoir menti après avoir été interrogée environ 6 heures par les enquêteurs. Elle indique dans sa deuxième version qu’elle n’avait pas été enlevée comme elle le prétendait, mais qu’elle se serait rendue à Sablé-sur-Sarthe à pieds. Ses blessures seraient donc accidentelles et elle aurait coupé elle-même son tee-shirt avec une paire de ciseaux. Lisa est rentrée chez elle et ses parents ont été mis au courant de ses déclarations mais elle fera l’objet d’une procédure pour "dénonciation d’infraction imaginaire".</p>
            <h5>Dénonciation d'infraction imaginaire ?</h5>
            <p>Les conséquences d'une "dénonciation d'infraction imaginaire" sont décrites dans le code pénal comme suit :</p>
            <blockquote>"le fait de dénoncer mensongèrement à l'autorité judiciaire ou administrative des faits constitutifs d'un crime ou d'un délit qui ont exposé les autorités judiciaires à d'inutiles recherches est puni de six mois d'emprisonnement et de 7 500 euros d'amende"</blockquote>
            <p>Si Lisa sera reconnue coupable à l'issue de l'enquête, elle risquera donc la peine indiquée ci-dessus.</p>
            <p>Aujourd’hui encore, la raison de son comportement reste inexpliquée mais une enquête aura lieu pour réunir des informations sur son état psychologique et permettre de comprendre les motifs de son agissement.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=11;
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