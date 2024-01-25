<?php
require_once '../config.php';

ob_start();
include ROOT_DIR . '/header.php';




ob_flush();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order: Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/account/login.css">
    <script type="text/javascript" src="/account/login.js"></script>   

</head>
<body>
    <div class="login-container">
        <h1 class="login-header">Log In!</h1>
        <form action="/account/process-login.php" method="post" target="__blank" class="login-form">
            <label for="email" class="entry-label">Email: </label><br>
            <input type="email" id="email" name="email" class="entry-box" placeholder="Enter Email" required><br>

            <label for="password1" class="entry-label">Password: </label><br>
            <input type="password" id="password1" name="password1" class="entry-box" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter Password" required><br>
            <span class="remember-me">
                <label for="stay-signed-in" class="stay-signed-in">
                Stay signed in <input type="checkbox" name="stay-signed-in" id="stay-signed-in">
                </label><br>
            </span>
            <button id="submit" class="submit-button">Submit</button>
        </form>
        <div class="separator">
            <div class="line"></div>
            <div class="text">OR</div>
            <div class="line"></div>
        </div>
        <a href="/account/signup.php" class="signup">Create an account!</a>

    </div>


</body>
</html>