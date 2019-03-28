<?php
    $title = "Home";
    $currentPage = "Home"; // This is an identifier for this page. Determine if the class currentPage should be applied. Read more in templates/header.php
    include $_SERVER['DOCUMENT_ROOT'].'/core/templates/init.php';
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/header.php'; ?>
        <div class="container">
            <section id="about">
                <h1>About</h1>
                <p><?php echo $settings_project['name']; ?> is an open source CTF template platform</p>
            </section>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/footer.php'; ?>
    </body>
</html>
