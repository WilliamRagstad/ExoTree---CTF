<?php
    $currentPage = $currentPage ?? "";
?>

<header>
    <div class="left">
        <img src="assets/logos/logo_100.png" alt="Logo Placeholder" class="logo">
        <h1><?php echo $settings_project['name']; ?></h1>
    </div>
    <div class="right">
        <ul class="header-links">
            <li <?php echo $currentPage == "Home" ? 'class="currentPage"' : ""; ?>><a href="/">Home</a></li>
            <li <?php echo $currentPage == "Upcoming" ? 'class="currentPage"' : ""; ?>><a href="/">Upcoming</a></li>
            <li <?php echo $currentPage == "About" ? 'class="currentPage"' : ""; ?>><a href="index.php">About</a></li>
            <li <?php echo $currentPage == "Archive" ? 'class="currentPage"' : ""; ?>><a href="index.php">Archive</a></li>
            <div class="vert-separator"></div>
            <li <?php echo $currentPage == "Register" ? 'class="currentPage"' : ""; ?>><a href="index.php">Register</a></li>
            <li <?php echo $currentPage == "Login" ? 'class="currentPage"' : ""; ?>><a href="index.php">Login</a></li>
        </ul>
        <div class="icon-sli-menu" id="mobile-sidebar-trigger"></div>
    </div>
</header>
<div id="header-hitbox" style="height: 68px"></div>
<script type="text/javascript" src="/js/header.js"></script>
