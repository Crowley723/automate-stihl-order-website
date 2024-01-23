<?php
require_once '../config.php';
require ROOT_DIR . '/vendor/autoload.php';

ob_start();
include ROOT_DIR . '/header.php';






?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/account/login.css">
    <script type="text/javascript" src="/account/login.js"></script>   

</head>
<body>
    <div class="login-container">
        <form action="/account/process-login.php" method="post" target="__blank" class="login-form">
            <label for="email" class="entry-label">Email: </label><br>
            <input type="email" id="email" name="email" class="entry-box" placeholder="Enter Email" required><br>

            <label for="password1" class="entry-label">Password: </label><br>
            <input type="password" id="password1" name="password1" class="entry-box" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter Password" required><br>
            <span class="remember-me">
                <label for="stay-signed-in" class="stay-signed-in">
                Stay signed in <input type="checkbox" name="stay-signed-in" id="stay-signed-in">
                </label><br>
                <button id="submit" class="submit-button">Submit</button>
            </span>
        </form>

    </div>


</body>
</html>