<?php include $_SERVER['DOCUMENT_ROOT'].'/core/settings/project.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="utf-8">
        <link rel="stylesheet" href="/assets/responsee-icons/css/icons.css">
        <link rel="stylesheet" href="/style/main.css">
        <title><?php echo $settings_project['titlePrefix'] . $title ?? ""; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="/assets/logos/favicon.png">


        <script>
            let showCredits = <?php echo $settings_project['showCredits'] ? "true" : "false"; ?>;
            let platformName = "<?php echo $settings_project['name']; ?>";
        </script>
    </head>
