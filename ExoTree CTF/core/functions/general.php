<?php
    // Here are some general functions used around the project
    function GetOrPost($key) {
        if (isset($_GET[$key])) {
            $token = $_GET[$key];
        }elseif (isset($_POST[$key])) {
            $token = $_POST[$key];
        }else {
            $token = null;
        }
        return $token;
    }

    function randomGuid() {
        return str_replace("{", "", str_replace("}", "", (string)com_create_guid()));
    }
?>
