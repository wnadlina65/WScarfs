<?php
    session_start();
    session_unset();
    session_destroy();

    if(!$_SESSION['usersID'])
    {
        echo "Successfully logout.";
    }
?>