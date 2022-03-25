<!DOCTYPE html>
<html lang = en>
    <head>
        <title>Sign Up</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="account.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    </head>

    <body>
        <!-- Starts the session -->
        <?php session_start() ?>

        <!-- New User Registration -->
        <div class="container">
            <div class="animate__bounceIn">
                <form action="signup-submit.php" method="post">
                    <fieldset>
                        <center>
                        <h1>Sign up</h1>
                        <p>Sign up for an account here.</p>
                        <hr>
                        <label for="username"><b>Username</b></label><br>
                        <input type="text" size=50 maxlength=25 name="Username" placeholder="Enter a username." required>
                        <br>
                        <label for="password"><b>Password</b></label><br>
                        <input type="text" size=50 maxlength=25 name="Password" placeholder="Enter a password." required>
                        <input type="submit" name="Submit" value="Sign Up">
                        
                        <br><br><hr>
                        <p>Already have an account?</p>
                        <a href="index.php">Log in here.</a>
                        </center>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>