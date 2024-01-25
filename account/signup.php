<?php
require_once '../config.php';

ob_start();
include ROOT_DIR . '/header.php';




ob_flush();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order: Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/account/signup.css">
    <script type="text/javascript" src="/account/signup.js"></script>   

</head>
<body>
    <div class="signup-container">
        <h1 class="signup-header">Create an Account</h1>
        <form action="/account/process-signup.php" method="post" target="__blank" class="signup-form">
            <label for="email" class="entry-label">Email: </label><br>
            <input type="email" id="email" name="email" class="entry-box" placeholder="Enter Email" required><br>

            <label for="password1" class="entry-label">Password: </label><br>
            <input type="password" id="password1" name="password1" class="entry-box" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter Password" required><br>
            <button id="submit" class="submit-button">Submit</button>
        </form>
        <div class="separator">
            Already have an account?
        </div>
        <a href="/account/login.php" class="login">Log In</a>

    </div>


</body>
</html>