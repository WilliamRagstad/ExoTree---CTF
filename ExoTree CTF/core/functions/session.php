<?php
    if (session_id() == '') { session_start(); }
    $sessionAvailable = $_SESSION['loggedIn'] ?? False;
?>
