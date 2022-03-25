<?php
// Cookie refresh / Score reset to 0.
define("score", 0);
score.session_start();
error_reporting(0);
$cookie_name = "score";
setcookie("score",0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" http-equiv = "refresh" content = "3; url = main.php"/>
        <link rel="stylesheet" href="singlepage.css">
        <title>Reset</title>
    </head>

    <body>
        <h2 class = "center">Score has been reset. You will be automatically redirected back to the game board shortly.</h2>
    </body>
</html>