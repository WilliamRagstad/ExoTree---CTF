<?php
    $title = "About";
    $currentPage = "About"; // This is an identifier for this page. Determine if the class currentPage should be applied. Read more in templates/header.php
    include $_SERVER['DOCUMENT_ROOT'].'/core/templates/init.php';
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/header.php'; ?>
        <div class="container">
            <section id="about">
                <h1>About</h1>
                <p><?php echo $settings_project['name']; ?> is an open source CTF template platform
                    developed by William Rågstad.</p>
                <h1>GitHub</h1>
<a class="github-button" href="https://github.com/WilliamRagstad/ExoTree-CTF" data-show-count="true" data-icon="octicon-star" data-size="large" aria-label="Star WilliamRagstad/ExoTree-CTF on GitHub">Star</a>
<br>
<a class="github-button" href="https://github.com/WilliamRagstad/ExoTree-CTF/fork" data-size="large" data-icon="octicon-repo-forked" data-show-count="true" aria-label="Fork ntkme/github-buttons on GitHub">Fork</a>
<br>
<a class="github-button" href="https://github.com/WilliamRagstad" data-show-count="true" data-size="large" aria-label="Follow @WilliamRagstad on GitHub">Follow @WilliamRagstad</a>
            </section>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/footer.php'; ?>

        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
