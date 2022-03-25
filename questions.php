<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="qlayout.css">
        <title>Jeopardy</title>
    </head>
    <body>
        <div class = "container">
        <fieldset>
        <?php
        session_start();
        $id = $_GET['id'];
        ?>

        <!-- Questions for GSU Campus Buildings -->
        <?php if ($id == "buildings-200") { ?>
            <form action="answers.php" method="post">
                <h2>This building filled with classrooms is connected to Library South.</h2>
                <input type="text" name="buildings-200" size="28" maxlength="30" id="buildings-200">
                <br><br>
                <input name="sub" type="submit" value="Submit">
        </form>
        <?php } else if ($id == "buildings-400") { ?>
            <form action="answers.php" method="post">
                <h2>This building offers various recreational services.</h2>
                <input type="text" name="buildings-400" size="28" maxlength="30" id="buildings-400">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "buildings-600") { ?>
            <form action="answers.php" method="post">
                <h2>This building includes its own library for law students.</h2>
                <input type="text" name="buildings-600" size="28" maxlength="30" id="buildings-600">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "buildings-800") { ?>
            <form action="answers.php" method="post">
                <h2>This building is located in the historic Fairlie Poplar District of Downtown Atlanta.</h2>
                <input type="text" name="buildings-800" size="28" maxlength="30" id="buildings-800">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "buildings-1000") { ?>
            <form action="answers.php" method="post">
                <h2>This building has eight floors with the top floor hosting special collections and archives.</h2>
                <input type="text" name="buildings-1000" size="28" maxlength="30" id="buildings-1000">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <!-- Questions for Old-Time Sayings -->
        <?php } else if ($id == "sayings-200") { ?>
            <form action="answers.php" method="post">
                <h2>A way of saying that a task or activity was easy to complete.</h2>
                <input type="text" name="sayings-200" size="28" maxlength="30" id="sayings-200">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "sayings-400") { ?>
            <form action="answers.php" method="post">
                <h2>A way of saying it was raining very heavily.</h2>
                <input type="text" name="sayings-400" size="28" maxlength="30" id="sayings-400">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "sayings-600") { ?>
            <form action="answers.php" method="post">
                <h2>A way of saying someone will be happy if things were different.</h2>
                <input type="text" name="sayings-600" size="38" maxlength="39" id="sayings-600">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "sayings-800") { ?>
            <form action="answers.php" method="post">
                <h2>A way of saying to solve two problems with one action.</h2>
                <input type="text" name="sayings-800" size="28" maxlength="30" id="sayings-800">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "sayings-1000") { ?>
            <form action="answers.php" method="post">
                <h2>A way of saying to do something rather than just talk about it.</h2>
                <input type="text" name="sayings-1000" size="38" maxlength="39" id="sayings-1000">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <!-- Questions for Math -->
        <?php } else if ($id == "math-200") { ?>
            <form action="answers.php" method="post">
                <h2>What are the first three digits of pi (decimal included)?</h2>
                <input type="text" name="math-200" size="28" maxlength="30" id="math-200">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "math-400") { ?>
            <form action="answers.php" method="post">
                <h2>What is the square root of 225?</h2>
                <input type="text" name="math-400" size="28" maxlength="30" id="math-400">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "math-600") { ?>
            <form action="answers.php" method="post">
                <h2>Theorem: a^2 + b^2 = c^2</h2>
                <input type="text" name="math-600" size="28" maxlength="30" id="math-600">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "math-800") { ?>
            <form action="answers.php" method="post">
                <h2>What is the derivative of 4x?</h2>
                <input type="text" name="math-800" size="28" maxlength="30" id="math-800">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "math-1000") { ?>
            <form action="answers.php" method="post">
                <h2>This is a mathematical operation that determines how many times the base
                    is multipled by itself to reach another number.</h2>
                <input type="text" name="math-1000" size="28" maxlength="30" id="math-1000">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <!-- Questions for Pop Culture -->
        <?php } else if ($id == "pop-200") { ?>
            <form action="answers.php" method="post">
                <h2>What is the name of Mickey Mouse's girlfriend?</h2>
                <input type="text" name="pop-200" size="28" maxlength="30" id="pop-200">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "pop-400") { ?>
            <form action="answers.php" method="post">
                <h2>Shaggy, Scooby, Velma, Daphne... Who's missing?</h2>
                <input type="text" name="pop-400" size="28" maxlength="30" id="pop-400">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "pop-600") { ?>
            <form action="answers.php" method="post">
                <h2>This band told us that we are the champions.</h2>
                <input type="text" name="pop-600" size="28" maxlength="30" id="pop-600">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "pop-800") { ?>
            <form action="answers.php" method="post">
                <h2>What is the other superhero that the actor for Deadpool played?</h2>
                <input type="text" name="pop-800" size="28" maxlength="30" id="pop-800">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "pop-1000") { ?>
            <form action="answers.php" method="post">
                <h2>A recent Korean show that is a social allegory and criticism of capitalism.</h2>
                <input type="text" name="pop-1000" size="28" maxlength="30" id="pop-1000">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <!-- Questions for Computer Science -->
        <?php } else if ($id == "cs-200") { ?>
            <form action="answers.php" method="post">
                <h2>This company made the Windows operating system.</h2>
                <input type="text" name="cs-200" size="28" maxlength="30" id="cs-200">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "cs-400") { ?>
            <form action="answers.php" method="post">
                <h2>This is the output of every prorgrammer's first program when first learning coding.</h2>
                <input type="text" name="cs-400" size="28" maxlength="30" id="cs-400">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "cs-600") { ?>
            <form action="answers.php" method="post">
                <h2>This code consists of 0s and 1s.</h2>
                <input type="text" name="cs-600" size="28" maxlength="30" id="cs-600">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "cs-800") { ?>
            <form action="answers.php" method="post">
                <h2>The background color of a whole page can be changed by editing this CSS selector.</h2>
                <input type="text" name="cs-800" size="28" maxlength="30" id="cs-800">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "cs-1000") { ?>
            <form action="answers.php" method="post">
                <h2>This variable belongs to a class instead of an object of a class.</h2>
                <input type="text" name="cs-1000" size="28" maxlength="30" id="cs-1000">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <!-- Questions for Biology -->
        <?php } else if ($id == "bio-200") { ?>
            <form action="answers.php" method="post">
                <h2>An organism that is sought after by a predator is known as:</h2>
                <input type="text" name="bio-200" size="28" maxlength="30" id="bio-200">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "bio-400") { ?>
            <form action="answers.php" method="post">
                <h2>What is contained in the nucleus?</h2>
                <input type="text" name="bio-400" size="28" maxlength="30" id="bio-400">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "bio-600") { ?>
            <form action="answers.php" method="post">
                <h2>Which organelle converts food to energy for daily cellular activities?</h2>
                <input type="text" name="bio-600" size="28" maxlength="30" id="bio-600">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "bio-800") { ?>
            <form action="answers.php" method="post">
                <h2>With limited oxygen available the production of what in the mitrochondria will decrease?</h2>
                <input type="text" name="bio-800" size="28" maxlength="30" id="bio-800">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } else if ($id == "bio-1000") { ?>
            <form action="answers.php" method="post">
                <h2>This function provides the hydrogen atom.</h2>
                <input type="text" name="bio-1000" size="28" maxlength="30" id="bio-1000">
                <br><br>
                <input name="sub" type="submit" value="Submit">
            </form>
        <?php } ?>
        </fieldset>
        </div>
    </body>
</html>