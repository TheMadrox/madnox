<?php
    session_start();
    if(isset($_SESSION['selector']) && isset($_GET['selector'])){
        $_SESSION['selector'] = $_GET['selector'];
        unset($_SESSION['ultimo_id']);
    }
?>