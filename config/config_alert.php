<!--authors: SRIRAJ & TURRA-->
<?php
 //creation d'une fonction alert qui fait l'effet d'une alerte comme avec javascipt
 // en argument : -$msg qui va alert le message passé en argument et qui est défini dans les différentes pages php
 //               -$url qui correspond à l'url vers laquelle on veut se rediriger une fois le message imprimé
function alert($msg,$url) {
    echo "<script type='text/javascript'>". //appel à du javascript
        "alert('$msg');".  //alerte de javascript
        "window.location.href = '$url';". //redirection vers l'url
        "</script>";
}

?>