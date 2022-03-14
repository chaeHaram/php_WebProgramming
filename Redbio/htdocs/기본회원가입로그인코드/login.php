<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>LOGIN HERE</title>
    </head>
    <body>
        <h1>Welcome to REDBIO !</h1>
        <hr />
        <h2>LOGIN</h2>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) { ?>
        <form method="post" action="login_ok.php">
            <p>ID: <input type="text" name="user_id" /></p>
            <p>PWD: <input type="password" name="pw" /></p>
            <p><input type="submit" value="LOGIN" /></p>
        </form>
        <?php } else {
            $user_id = $_SESSION['user_id'];
            $name = $_SESSION['name'];
            echo "<p><strong></strong>$name($user_id) is already logined.";
            echo "<a href=\"index.php\">[GO HOME]</a> ";
            echo "<a href=\"logout.php\">[LOGOUT]</a></p>";
        } ?>
    </body>
</html>