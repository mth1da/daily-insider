<!--authors: SRIRAJ & TURRA-->
<!-- page d'inscription et de connexion-->
<?php session_start();
$_SESSION['url'] = $_SERVER['SCRIPT_NAME']; //"http://localhost/PROJET/inscription.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>S'inscrire | The Daily Insider</title>
        <link rel="stylesheet" href="sheets/stylesheet.css">
        <script language="javascript" type="text/javascript" src="sheets/scriptsheet.js"></script>
        <script src="https://kit.fontawesome.com/ccd7bb19ea.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php include_once('header.php'); ?>
    
    <div class="block">  <!-- ceci correspond au cadre du formulaire-->
		<br>
        
            <div class="cadrebouton">  <!-- ceci correspond au cadre dans lequel vont se trouver les deux boutons-->
				<div id="decobouton"></div> <!-- ceci correspond au fond que va prendre le bouton lorsqu'on va cliquer dessus-->
				<button id="left" class="bouton" type="button" onclick="inscrire()" ><?php echo $signin; ?></button>
				<button id="right" class="bouton" type="button" onclick="connecter()"><?php echo $login; ?></button>
			</div>
            <div class="content">
				<form name="Inscription" class="formul" id="inscription" onsubmit="return verify()" action="config/config_inscription.php" method="POST">
                <div class="input-box">
                    <span class="details"><label for="nom"><?php echo $lastname; ?></label></span>
                    <input type="text" name="name" id="nom"> <span class="error" id="erreur"></span>
                </div>
                <div class="input-box">
                    <span class="details"><label for="prenom"><?php echo $firstname; ?></label></span>
                    <input type="text" name="Prenom" id="prenom"> <span class="error" id="mistake"></span>
                </div>
                <div class="radio-box">
                    <span class="details"><?php echo $gender; ?></span>
                    <span class="category"><?php echo $h; ?><input type="radio" name="sexe" value="masculin" id="masc"></span>
                    <span class="category"><?php echo $f; ?><input type="radio" name="sexe" value="feminin" id="fem"></span>
                </div>
                <div class="input-box">
                    <span class="details"><?php echo $bdate; ?></span>
                    <input type="date" min="1900-01-01" max="2010-01-01" name="naissance" value="naissance"><br>
                    <!--la date de naissance doit être postérieure au 01/01/1900 et antérieure au 01/01/2010-->
                </div>
                <div class="input-box">
                    <span class="details">Continent</span>
                            <select name="continent">
                                <option value="Europe"><?php echo $eu; ?></option>
                                <option value="Asie"><?php echo $as; ?></option>
                                <option value="Afrique"><?php echo $af; ?></option>
                                <option value="Amérique_du_Nord"><?php echo $na; ?></option>
                                <option value="Amérique_du_Sud"><?php echo $sa; ?></option>
                                <option value="Oceanie"><?php echo $oc; ?></option>
                            </select>
                </div>
                <div class="input-box">
                    <span class="details"><label for="email">Email</label></span>
                    <input type="text" name="email" id="email"><span class="error" id="faute"></span>
                </div>
                <div class="input-box">
                    <span class="details"><label for="mdp"><?php echo $pswd; ?></label></span>
                    <input type="password" name="mdp" id="mdp"><span class="error" id="vide"></span>
                </div>
				<div>
                    <input type="checkbox" onclick="show()"><?php echo $showpwd; ?></td>
                    <!-- appel à la fonction javascript show() pour montrer ou cacher le mot de passe-->
                </div>
                <div class="attention"><br><?php echo $warning2; ?></div><br>
                <span class="input-submit">
                    <input type="reset" name="annuler" value="<?php echo $annul; ?>"></span>
                    <span class="input-submit"><input type="submit" value="<?php echo $envoyer; ?>"></span>
                </form>
        </div>
        
        <div class="content">
			<form name="Connexion" class="formul" id="connecter" onsubmit="return connection()" action="config/config_connexion.php" method="POST">
                <div class="input-box">
                    <span class="details"><label for="mail"><?php echo $mailpseudo; ?></label></span>
                    <input type="text" name="mail" id="mail"><span class="error" id="er"></span>
                </div>
                <div class="input-box">
                    <span class="details"><label for="motdepasse"><?php echo $pswd; ?></label></span>
                    <input type="password" name="motdepasse" id="motdepasse"><span class="error" id="err"></span>
                </div>
                <div>
				    <input type="checkbox" onclick="montrer()"><?php echo $showpwd; ?>
                    <!-- appel à la fonction javascript montrer() pour montrer ou cacher le mot de passe-->
                </div><br>
				<div class="input-submit">
                   <input type="submit" value="<?php echo $login; ?>">
                </div>
			</form>
        </div>
    </div>

        <?php include_once("footer.php"); ?>
    </body>

</html>