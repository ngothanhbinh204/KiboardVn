<?php
    session_start();

    session_destroy();
    // or session_detroy();
    header('location: index.php');
    
?>