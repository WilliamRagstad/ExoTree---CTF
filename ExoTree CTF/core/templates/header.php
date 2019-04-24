<?php
    $currentPage = $currentPage ?? "";
    include $_SERVER['DOCUMENT_ROOT'].'/core/functions/session.php';
?>

<header>
    <div class="left">
        <img src="assets/logos/logo_100.png" alt="Logo Placeholder" class="logo">
        <h1><?php echo $settings_project['name']; ?></h1>
    </div>
    <div class="right">
        <ul class="header-links">
            <li <?php echo $currentPage == "Home" ? 'class="currentPage"' : ""; ?>><a href="/">Home</a></li>
            <li <?php echo $currentPage == "About" ? 'class="currentPage"' : ""; ?>><a href="about.php">About</a></li>
            <?php
                if ($sessionAvailable) {
                    ?>
                    <li <?php echo $currentPage == "Problems" ? 'class="currentPage"' : ""; ?>><a href="problems.php">Problems</a></li>
                    <?php
                }
            ?>
            <li <?php echo $currentPage == "Archive" ? 'class="currentPage"' : ""; ?>><a href="archive.php">Archive</a></li>
            <li <?php echo $currentPage == "Scoreboard" ? 'class="currentPage"' : ""; ?>><a href="scoreboard.php">Scoreboard</a></li>
            <div class="vert-separator"></div>
            <?php
                if ($sessionAvailable) {
                    ?>
                    <li><a href="logout.php">Logout</a></li>
                    <?php
                }
                else {
                    ?>
                    <li <?php echo $currentPage == "Login" ? 'class="currentPage"' : ""; ?>><a href="login.php">Login</a></li>
                    <?php
                }
            ?>
        </ul>
        <div class="icon-sli-menu" id="mobile-sidebar-trigger"></div>
    </div>
</header>
<div id="header-hitbox" style="height: 68px"></div>
<script type="text/javascript" src="/js/header.js"></script>
