<!--authors: SRIRAJ & TURRA-->
<!--header-->
<header> 
    <?php include_once('config/config_lang.php'); ?>
    <nav>
    
        <a href="accueil.php"> <img class="logo" src="img/logo.jpg" alt="logo du site"></a>

        <ul>
            <br><br>
            <li><form action="" method="post">
                    <button class="lang" type="submit" name="lang" value="french">Français</button>| 
	                <button class="lang" type="submit" name="lang" value="english">English</button>
	                
                </form>
            </li>
            <li><a href="inscription.php"> <button class="comment"><span><?php echo $GLOBALS['login'];?></span></button></a></li>
        </ul>
    </nav>
    <div id="menu">
        <ul>
            <li><a href="accueil.php"><?php echo $GLOBALS['home']; ?></a></li>
            <li><a href="politique.php"><?php echo $GLOBALS['pol']; ?></a></li>
            <li><a href="economie.php"><?php echo $GLOBALS['eco']; ?></a></li>
            <li><a href="environnement.php"><?php echo $GLOBALS['env']; ?></a></li>
            <li><a href="societe.php"><?php echo $GLOBALS['soc']; ?></a></li>
            <li><a href="sport.php"><?php echo $GLOBALS['sport']; ?></a></li>
            <li><a href="divers.php"><?php echo $GLOBALS['div']; ?></a></li>
            <li class="dropdown">
                <a><i class="fa-solid fa-user"></i></a>
                <div class="dropdown-content">
                    <a href="favoris.php"><?php echo $GLOBALS['favs'];?></a>
                    <a href="parametres.php"><?php echo $GLOBALS['settings'];?></a>
                </div>
            </li>
        </ul>
    </div>
</header>
<!--end header-->