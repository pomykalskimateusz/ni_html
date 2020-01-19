<?php
    session_start();

    if(isset($_SESSION["authentication_data"])) {
            unset($_SESSION["authentication_data"]);
    };
    header('Location: ../authentication.php');
?> 
