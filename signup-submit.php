<!DOCTYPE html>
<html lang = en>
    <head>
        <title>Sign Up</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="account.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    </head>

    <body>
        <?php
        // Starts the session.
        session_start();

        // Post method for Username and Password.
        $accounts = array(
            'Username' => $_POST['Username'],
            'Password' => $_POST['Password'],
        );

        // Writing the user's new credentials to the text file.
        $handle = fopen("accounts.txt", "r");
        $is_valid = false;
        if($handle) {
            while (!feof($handle)) {
                $ln = fgets($handle);
                $str = preg_split("/\,/", $ln);

                if ($str[0] == $accounts['Username']) {
                    $is_valid = true;
                }
            } if ($is_valid != true) {
                $details = $accounts;
                $newinfo = implode(",", $details);
                file_put_contents("accounts.txt", PHP_EOL.$newinfo, FILE_APPEND);
                header('Location: index.php');
            } else { ?>
                <!-- Error(?): Username is already taken. -->
                <div class="container">
                    <div class="animate__zoomIn">
                        <h3>This username has been taken already. Try a different username.</h3>
                        <p><a href="signup.php"><center>Go back to the sign up page.<center></a></p>
                    </div>
                </div>
            <?php
            }
            fclose($handle);
        // Text file cannot be read for whatever reason.
        } else {
            echo "Cannon read file.";
        }
        ?>
    </body>
</html>