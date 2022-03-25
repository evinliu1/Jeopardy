<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Result</title>
        <link rel="stylesheet" href="singlepage.css">
    </head>
    <body>
        <div class = "center">
        <?php
        $cookie_name = "score";
        $cookie_value = 0;
        define($cookie_name, $_COOKIE[$cookie_name]);

        score.session_start();
        error_reporting(0);
        setcookie($cookie_name, $cookie_value);
        ?>

        <?php
        error_reporting(0);

        if (isset($_POST["buildings-200"])) {
            $res = strtolower($_POST["buildings-200"]);
            if ($res == "classroom south") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 200;
            setcookie($cookie_name, $value);

            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 200;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
            <?php }
        }
        
        else if (isset($_POST["buildings-400"])) {
            $res = strtolower($_POST["buildings-400"]);
            if ($res == "student recreation center") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 400;
            setcookie($cookie_name, $value);
        
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 400;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["buildings-600"])) {
            $res = strtolower($_POST["buildings-600"]);
            if ($res == "college of law") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 600;
            setcookie($cookie_name, $value);
        
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 600;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["buildings-800"])) {
            $res = strtolower($_POST["buildings-800"]);
            if ($res == "aderhold learning center") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 800;
            setcookie($cookie_name, $value);
            
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 800;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["buildings-1000"])) {
            $res = strtolower($_POST["buildings-1000"]);
            if ($res == "library south") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 1000;
            setcookie($cookie_name, $value);

            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 1000;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["sayings-200"])) {
            $res = strtolower($_POST["sayings-200"]);
            if ($res == "a piece of cake") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 200;
            setcookie($cookie_name, $value);

            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 200;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["sayings-400"])) {
            $res = strtolower($_POST["sayings-400"]);
            if ($res == "raining cats and dogs") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 400;
            setcookie($cookie_name, $value);
            
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 400;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["sayings-600"])) {
            $res = strtolower($_POST["sayings-600"]);
            if ($res == "the grass is greener on the other side") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 600;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 600;
                setcookie($cookie_name, $value);?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["sayings-800"])) {
            $res = strtolower($_POST["sayings-800"]);
            if ($res == "kill two birds with one stone") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 800;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 800;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["sayings-1000"])) {
            $res = strtolower($_POST["sayings-1000"]);
            if ($res == "put your money where your mouth is") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 1000;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 1000;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["math-200"])) {
            $res = strtolower($_POST["math-200"]);
            if ($res == "3.14") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 200;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 200;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["math-400"])) {
            $res = strtolower($_POST["math-400"]);
            if ($res == "15") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 400;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 400;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["math-600"])) {
            $res = strtolower($_POST["math-600"]);
            if ($res == "pythagorean theorem") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 600;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 600;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["math-800"])) {
            $res = strtolower($_POST["math-800"]);
            if ($res == "4") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 800;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 800;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["math-1000"])) {
            $res = strtolower($_POST["math-1000"]);
            if ($res == "logarithm") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 1000;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 1000;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["pop-200"])) {
            $res = strtolower($_POST["pop-200"]);
            if ($res == "minnie mouse") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 200;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 200;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["pop-400"])) {
            $res = strtolower($_POST["pop-400"]);
            if ($res == "fred") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 400;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 400;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["pop-600"])) {
            $res = strtolower($_POST["pop-600"]);
            if ($res == "queen") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 600;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 600;
                setcookie($cookie_name, $value);?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["pop-800"])) {
            $res = strtolower($_POST["pop-800"]);
            if ($res == "green lantern") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 800;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 800;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["pop-1000"])) {
            $res = strtolower($_POST["pop-1000"]);
            if ($res == "squid game") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 1000;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 1000;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["cs-200"])) {
            $res = strtolower($_POST["cs-200"]);
            if ($res == "microsoft") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 200;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 200;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["cs-400"])) {
            $res = strtolower($_POST["cs-400"]);
            if ($res == "hello world") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 400;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 400;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["cs-600"])) {
            $res = strtolower($_POST["cs-600"]);
            if ($res == "binary") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 600;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 600;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["cs-800"])) {
            $res = strtolower($_POST["cs-800"]);
            if ($res == "body") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 800;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 800;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["cs-1000"])) {
            $res = strtolower($_POST["cs-1000"]);
            if ($res == "static variable") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 1000;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 1000;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["bio-200"])) {
            $res = strtolower($_POST["bio-200"]);
            if ($res == "prey") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 200;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 200;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["bio-400"])) {
            $res = strtolower($_POST["bio-400"]);
            if ($res == "dna") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 400;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 400;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["bio-600"])) {
            $res = strtolower($_POST["bio-600"]);
            if ($res == "mitochondria") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 600;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 600;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else if (isset($_POST["bio-800"])) {
            $res = strtolower($_POST["bio-800"]);
            if ($res == "atp") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 800;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 800;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }

        else {
            $res = strtolower($_POST["bio-1000"]);
            if ($res == "napdh2") { ?>
                <h1>Correct!</h1>
                <a href="main.php">Back to game board</a>
            <?php
            score.session_start();
            $_COOKIE[$cookie_name];
            $cookie_value = $_COOKIE[$cookie_value];
            $value = (int)$_COOKIE["$cookie_name"] + 1000;
            setcookie($cookie_name, $value);
            } else {
                score.session_start();
                $value = (int)$_COOKIE["$cookie_name"] - 1000;
                setcookie($cookie_name, $value);
                ?>
                <h1>Wrong...</h1>
                <a href="main.php">Back to game baord</a>
                <?php }
        }?>
        </div>
    </body>
</html>