<!DOCTYPE html>
<html lang = en>
    <head>
        <title>Login</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="account.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    </head>

    <body>
        <?php
            // Starts the session.
            session_start();
        ?>

        <!-- User Login -->
        <div class="container">
            <div class="animate__bounceIn">
                <form action="login-submit.php" method="post">
                    <fieldset>
                        <center>
                        <h1>Login</h1>
                        <p>Log in to your account here.</p>
                        <hr>
                        <label for="username"><b>Username</b></label><br>
                        <input type="text" size=50 maxlength=25 name="Username" placeholder="Enter a username." required>
                        <br>
                        <label for="password"><b>Password</b></label><br>
                        <input type="text" size=50 maxlength=25 name="Password" placeholder="Enter a password." required>
                        <input type="submit" name="Submit" value="Login">
                        
                        <br><br><hr>
                        <p>Don't have an account?</p>
                        <a href="signup.php">Sign up here.</a>
                        </center>
                    </fieldset>
                </form>

                <?php
            // Error: User's login credentials are not correct.
            if(isset($_SESSION['fail_login'])){
                if($_SESSION['fail_login'] == TRUE){
                    ?>
                    <center>
                    <p>
                        Either the username/password is incorrect or this account does not exist.
                        <br>
                        Please try again.
                    </p>
                    </center>
                    <?php
                    $_SESSION['fail_login'] = FALSE;
                }
            }
        ?>
            </div>
        </div>
    </body>
</html>