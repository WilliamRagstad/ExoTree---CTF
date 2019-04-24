<?php
    $title = "Login";
    $currentPage = "Login"; // This is an identifier for this page. Determine if the class currentPage should be applied. Read more in templates/header.php
    include $_SERVER['DOCUMENT_ROOT'].'/core/templates/init.php';
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/header.php'; ?>
        <div class="container">
            <h1>Login</h1>
            <form class="vertical-form" method="post">
                <input type="text" name="username_email" placeholder="Username or Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

            <!-- Create Forgot password and register links here -->
            <a href="register.php">Register</a>

            <?php
                if (isset($_POST['username_email']) && isset($_POST['password'])) {
                    include $_SERVER['DOCUMENT_ROOT'].'/core/functions/database.php';

                    $username_or_email = $_POST['username_email'];
                    $password = hash_hmac($settings_server['password_hash_type'], $_POST['password'], $settings_server['password_hash']);

                    $sql = "SELECT * FROM users WHERE (username = '$username_or_email' or email = '$username_or_email') and password = '$password'";

                    $r = $conn->query($sql);
                    $result = mysqli_fetch_array($r,MYSQLI_ASSOC);
                    if ($result != null) {
                        // Start and set session variables
                        include $_SERVER['DOCUMENT_ROOT'].'/core/functions/session.php';

                        $_SESSION['id'] = $result['id'];
                        $_SESSION['token'] = $result['token'];
                        $_SESSION['username'] = $result['username'];
                        $_SESSION['loggedIn'] = True;

                        header("Location: problems.php");
                    }
                    else {
                        echo '<font color="red">The username or password was incorrect.</font>';
                    }
                }
                ?>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/core/templates/footer.php'; ?>
    </body>
</html>
