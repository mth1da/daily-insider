<!--authors: SRIRAJ & TURRA-->
<!-- page environnement : article Baleine-->
<?php
    session_start();
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                    //"http://localhost/PROJET/env_baleine.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>France : Une baleine a été rerouvée sur le port de Calais | The Daily Insider</title>
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
            <h4>France : Une baleine a été retrouvée sur le port de Calais</h4>
            <p class="maj">Mis à jour le 08/11/21 à 13h35</p>
            <br>
            Ce Samedi 6 Novembre 2021, à environ 12h une baleine de 19 mètres de long a été retrouvée morte sur le port de Calais après s’être blessée.
            <br><br>
            <img class="images" src="img/baleineCalais.jpg" alt="photo de la baleine retrouvée à Calais">
            <figcaption>Photo de la baleine retrouvée à Calais</figcaption>
            <br><br>
            <p> <span class="lettrine">C</span>’était une femelle qui avait entre 30 et 40 ans et elle semblait être gravement malade. En effet, elle présente de nombreuses lésions sur la peau et elle pèse environ une quinzaine de tonnes alors qu'une baleine de cette taille et de cet âge doit normalement peser une vingtaine de tonnes environ. Elle était donc en sous-alimentation. La dégradation de l’eau qui est face à de plus en plus de pollution aurait probablement causé un manque de ressources alimentaires pour la baleine. Cela serait probablement la cause de sa sous-alimentation. La pollution de l'eau est un phénomène grave qui est le plus souvent causé par l'action humaine. En effet, le rejet de pétrole, d'eaux usées ou d'éléments chimiques par certaines entreprises ou bateaux dans l'océan a un impact sur les animaux marins qui y vivent.</p>
            <h5>Pourquoi s'est-elle échouée sur le port ?</h5>
            <p>Les baleines sont dotées d’un système d’écholocalisation qui leur permet de se repérer, de chasser. La baleine était très malade et son système d’écholocalisation aurait donc probablement été affecté et cela pourrait ainsi expliquer sa désorientation vers ce port.</p>
            <h5> Quelle est la cause de son décès ?</h5>
            <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;"> <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x85dgji" width="100%" height="100%" allowfullscreen > </iframe> </div>
            <p>La baleine s'est heurtée aux rochers du port et elle s’est donc retournée sur le sable. Elle ne serait cependant pas morte à cause du heurtement mais d’étouffement par son propre poids. En effet, elle se serait retrouvée la tête dans le sable et les évents (se trouvent au-dessus de sa tête) qui lui permettent de respirer se sont retrouvés sur le sable.
            <p>Ce mardi 9/11, la baleine va être déplacée pour faire son autopsie complète par les spécialistes.</p>
            <br><br>
            <?php
                if(isset($_SESSION["mail"])){  //si un utilisateur est connecté,  il peut ajouter ou supprimer l'article de ses favoris
                    $value_fav=8;
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
