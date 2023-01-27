<!--authors: SRIRAJ & TURRA-->
<!--footer--->
<footer>
    <?php include_once('config/config_lang.php'); ?> <!--on inclus le fichier config_lang.php qui contient les variables à imprimer selon la langue sélectionnée-->

    <ul><b><?php echo $GLOBALS['rubric']; ?></b> <!--appel à la variable $rubric qui est contenue dans config_lang.php-->
        <br><br>
        <li><a href="politique.php" ><?php echo $GLOBALS['pol']; ?></a></li>
        <li><a href="economie.php" ><?php echo $GLOBALS['eco']; ?></a></li>
        <li><a href="environnement.php" ><?php echo $GLOBALS['env']; ?></a></li>
        <li><a href="societe.php" ><?php echo $GLOBALS['soc']; ?></a></li>
        <li><a href="sport.php" ><?php echo $GLOBALS['sport']; ?></a></li>
        <li><a href="divers.php" ><?php echo $GLOBALS['div']; ?></a></li>
    </ul>
            
        <ul><b><?php echo $GLOBALS['contact']; ?></b>
            <br><br>
            <li><a href="mailto:contactnews@gmail.com" target="_blank">mail : contactnews@gmail.com</a></li> <!--mettre un lien vers une page mail-->
            <li><?php echo $tel; ?> : 33 33 33 33 33</li>
            <li><a href="https://goo.gl/maps/dfAGMmoq9A689gQM9" target="_blank"> <?php echo $GLOBALS['address']; ?> : 120 Rue Fausse, Paris 5ème</a></li>
        </ul>
            
        <ul><b><?php echo $GLOBALS['follow']; ?></b>
            <br><br>
            <li><a href="https://fr-fr.facebook.com/" target="_blank"><i id="socials" class="fa-brands fa-facebook"></i></a> </li>
            <li><a href="https://twitter.com/" target="_blank"><i id="socials" class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><i id="socials" class="fa-brands fa-instagram"></i></a></li>
        </ul>
             
        <ul><b><?php echo $GLOBALS['account']; ?></b>
            <br><br>
            <li><a href="favoris.php"><?php echo $GLOBALS['favs']; ?></a></li>
            <li><a href="parametres.php"><?php echo $GLOBALS['settings']; ?></a></li>
        </ul>
</footer>
<!-- end footer-->