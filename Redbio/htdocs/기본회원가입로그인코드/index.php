<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>REDBIO</title>
    </head>
    <body>
        <h1>Welcome to REDBIO,</h1>
        <?php
            if(!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) {
                echo "<p>Please do Login. <a href=\"login.php\">[LOGIN]</a></p>";
            } else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['name'];
                echo "<p>Hi,<strong> $user_name</strong>($user_id)";
                echo "<a href=\"logout.php\">   [LOGOUT]</a></p>";
            }
        ?>
        <hr />
        <p>Welcom to REDBIO</p>
    </body>
</html>