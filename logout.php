<?php
    session_start();
    session_destroy();
    header('Location: loginsistema.php');
    exit;
    ?>