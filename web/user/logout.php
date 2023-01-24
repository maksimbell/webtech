<?php 
    session_start();
    session_destroy();

    header("Location: /engine/games.php");
?>