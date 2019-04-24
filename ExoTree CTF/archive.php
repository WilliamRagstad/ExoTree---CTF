<?php
    $title = "Archive";
    $currentPage = "Archive"; // This is an identifier for this page. Determine if the class currentPage should be applied. Read more in templates/header.php
    include $_SERVER['DOCUMENT_ROOT'].'/core/templates/init.php';
    include $_SERVER['DOCUMENT_ROOT'].'/core/functions/session.php';
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/header.php'; ?>
        <div class="container">
            <h1>Archive</h1>
            <p>
                There is no archive yet.
            </p>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/footer.php'; ?>
    </body>
</html>
