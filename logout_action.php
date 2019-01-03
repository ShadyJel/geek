<?php
    include 'connect.php';
    session_destroy();
    if(!isset($_SESSION['username'])){
        header('Location: main.html');
    }
?> 