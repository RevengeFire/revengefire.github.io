<?php
    ob_start();
    session_start();

    //çıkış yap
    session_destroy();

    //anasayfaya yönlendir
    header("Location: index.php");
?>