<!--authors: SRIRAJ & TURRA-->
<!--page favoris-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Articles favoris | The Daily Insider</title>
        <link rel="stylesheet" href="sheets/stylesheet.css">
        <script src="sheets/scriptsheet.js" language="javascript" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/ccd7bb19ea.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php
        include_once('config/config_lang.php'); //on inclus le fichier config_lang.php qui contient les variables à imprimer selon la langue sélectionnée
        if(isset($_SESSION["mail"])){  //si un utilisateur est connecté, la variable $_SESSION est définie donc on affiche le header_utilisateur
		    include_once("header_utilisateur.php");
            include_once ("config/config_data.php"); //on inclus le fichier config_data.php pour récupérer l'identifiant de l'utilisateur

	    }
	    else{
            include_once('header.php');
            echo "<div class='blocktext'>".$warning3."</div>";
            include_once("footer.php");
            exit();
        }
    ?>

    

        <div class="blocktext"> <!-- si l'utilisateur est connecté, il n'y a pas de exit() donc cette partie s'affiche pour lui-->

        <?php
        include_once("config/config_lang.php");
        include_once ('config/idconnect.php'); //fichier contenant les identifiants pour accéder à notre base de données 
        $idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd

        $sql="SELECT titre, href from article a, favoris f where id_user='$GLOBALS[id]' and a.id_article=f.id_article"; //on selectionne le titre et l'hyperlien des articles favoris de l'utilisateur grâce à une jointure
        $result = $idcon->query($sql);
        if ($result->num_rows > 0){  //si il y a un résultat,
            if ($result->num_rows == 1) { //si il y a un seul article favoris,
                echo $GLOBALS['unart']; //on le dit à l'utilisteur
            }
            else{ //s'il y a plusieurs articles
                echo "<br>".$GLOBALS['plsart_1'].$result->num_rows.$GLOBALS['plsart_2']."<br>"; //on dit à l'utilisteur combien il y en a en comptant le nombre de lignes
            }
            while($row = $result->fetch_assoc()) {      //on accede ensuite les résulats qui nous interressent (c'est-à-dire le titre et l'hyperlien des articles favoris) grace à la fonction fetch_asooc()
                echo "<br> <h1>". $row['titre']. "</h1>";       //on imprime le résulat avec $row['champs souhaité']
                echo "<a href='".$row['href']."'><button class='read'><span>".$GLOBALS['lire']."</span></button></a><br>";
            }
        } else {
            echo $GLOBALS['pasdefav'];
        }
        $idcon->close();
        ?>
    
        </div>
        

        <?php include_once("footer.php"); ?>
    </body>
</html>