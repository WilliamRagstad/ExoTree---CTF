<?php
    include $_SERVER['DOCUMENT_ROOT'].'/core/functions/session.php';

    session_unset();
    if (session_destroy()) {
        header("Location: index.php");
    }

    echo "Failed to logout!";
?>

<a href="index.php">Home</a>
