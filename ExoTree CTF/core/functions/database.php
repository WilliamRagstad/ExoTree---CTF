<?php

    include $_SERVER['DOCUMENT_ROOT'].'/core/settings/server.php';

    $conn = new mysqli($settings_server['database_host'],
                       $settings_server['database_username'],
                       $settings_server['database_password'],
                       $settings_server['database_db']);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        if ($settings_server['database_showErrors']) {
            die("Connection to database failed: " . $conn->connect_error);
        }
        else {
            die("Connection to database failed!");
        }
    }
 ?>
