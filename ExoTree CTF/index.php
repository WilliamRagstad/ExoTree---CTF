<?php
    $title = "Home";
    $currentPage = "Home"; // This is an identifier for this page. Determine if the class currentPage should be applied. Read more in templates/header.php
    include $_SERVER['DOCUMENT_ROOT'].'/core/functions/init.php';
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/header.php'; ?>

        <section id="about">
            <p><?php echo $settings_project['name']; ?> is an open source CTF template platform</p>
        </section>
    </body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/footer.php'; ?>
</html>
