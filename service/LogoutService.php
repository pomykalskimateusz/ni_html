<?php
    session_start();

    if(isset($_SESSION["authenticated_user"])) {
            unset($_SESSION["authenticated_user"]);
    };
    header('Location: ../authentication.php');
?> 
