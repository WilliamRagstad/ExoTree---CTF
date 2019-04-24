<?php
    $title = "Problems";
    $currentPage = "Problems"; // This is an identifier for this page. Determine if the class currentPage should be applied. Read more in templates/header.php
    include $_SERVER['DOCUMENT_ROOT'].'/core/templates/init.php';
    include $_SERVER['DOCUMENT_ROOT'].'/core/functions/session.php';
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/header.php'; ?>
        <div class="container">
            <h1>Problems</h1>
            <p>
                <?php if ($sessionAvailable) echo "Welcome " . $_SESSION['username'] . "!"; ?>
                <?php echo $sessionAvailable ? "You are logged in." : "You are not logged in."; ?>
            </p>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/footer.php'; ?>
    </body>
</html>
