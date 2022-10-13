<?php
    
    if(!$_SESSION['login']){
        header('Location: loginsistema.php');
        exit();
    }
?>