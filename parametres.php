<!--authors: SRIRAJ & TURRA-->
<!--page d'accueil-->
<?php 
    session_start(); 
    $_SESSION['url'] =$_SERVER['SCRIPT_NAME'];// on stocke l'url de la page actuelle dans une variable de session (utile pour se rediriger vers la page précédante lors de message d'alerte, cf config_alert.php)
                //"http://localhost/PROJET/parametres.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paramètres | The Daily Insider</title>
        <link rel="stylesheet" href="sheets/stylesheet.css">
        <script src="https://kit.fontawesome.com/ccd7bb19ea.js" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="sheets/scriptsheet.js"></script>
    </head>

    <body>
    <?php
        include_once('config/config_lang.php'); //on inclus le fichier config_lang.php qui contient les variables à imprimer selon la langue sélectionnée
        if(isset($_SESSION["mail"])){  //si un utilisateur est connecté, la variable $_SESSION['mail'] est définie donc on affiche le header_utilisateur
		    include_once("header_utilisateur.php"); //header propre à l'utilisateur
            include_once ("config/config_data.php"); //appel aux données de l'utilisateur
        }
	    else{
            include_once('header.php'); //si l'utilisateur n'est pas connecté, on affiche le header "normal"
            echo "<div class='blocktext'>".$GLOBALS['warning1']."</div>";  //et on précise qu'il faut être connecter pour acceder aux parametres
            include_once("footer.php");
            exit(); //on n'execute pas la fin du programme
        }
    ?>
                    
    
    <br>
    <div class="container">
        <div class="title"><?php echo $GLOBALS['account']; ?></div>
        <div class="content">
        <form name="Informations" onsubmit='return verifymdp()' action="config/config_param.php" method="POST">
            <div class="content">
            <div class="input-box">
                <span class="details"><?php echo $GLOBALS['lastname'];?></span>
                <input type="text" value='<?php echo $GLOBALS['nom'];?>' readonly>  <!-- readonly pour ne pas pouvoir modifier l'input-->
            </div>
            <div class="input-box">
                <span class="details"><?php echo $GLOBALS['firstname'];?></span>
                <input type="text" value='<?php echo $GLOBALS['prenom'];?>' readonly>
            </div>
            <div class="input-box">
                <span class="details"><?php echo $GLOBALS['username'];?></span>
                <input type="text" value='<?php echo $GLOBALS['pseudo'];?>' readonly>
            </div>
            <div class="input-box">
                <span class="details"><?php echo $GLOBALS['gender'];?></span>
                <input type="text" value='<?php echo $GLOBALS['sexe'];?>' readonly>
            </div>
            <div class="input-box">
                <span class="details"><?php echo $GLOBALS['bdate'];?></span>
                <input type="text" value='<?php echo $GLOBALS['naissance'];?>' readonly>
            </div>
            <div class="input-box">
                <span class="details">Age</span>
                <input type="text" value='<?php echo $GLOBALS['age'];?>' readonly>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" value='<?php echo $GLOBALS['mail'];?>' readonly>
            </div>
            <div class="input-box">
                <span class="details"><?php echo $GLOBALS['pswd'];?></span>
                <input type="password" name="mdp" id="mdp" value='<?php echo $GLOBALS['mdp'];?>'>
                <span class="error" id="rien"></span>
            </div>
            <div>
                <input type="checkbox" onclick="show()"><?php echo $showpwd;?>
            </div>
            <br><br>
            <input type="submit" value='<?php echo $GLOBALS['save'];?>'>
        </form>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="title">Informations</div>
        <div class="content">
            <?php include_once ("config/config_param_info.php"); MoyAge(); //appel à la fonction MoyAge située dans config_param_info.php ?>
        </div>
    </div>

    <?php include_once("footer.php");?>
    </body>
</html>