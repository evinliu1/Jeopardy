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
        session_start();

        $txt = file_get_contents('accounts.txt');
        $file = fopen("php://temp", 'r+');
        fputs($file,$txt);
        rewind($file);

        $users = [];

        while(($data = fgetcsv($file)) !== FALSE){
            $users[] = $data;
        }
        $failed = TRUE;
    
        for($i = 0; $i < count($users); $i++){
            if(!isset($users[$i][0])) {
                continue;
            }
            else{
                if($_POST['Username'] == $users[$i][0] && $_POST['Password'] == $users[$i][1]){
                    $_SESSION['Username'] = $users[$i][0];
                    $failed = FALSE;
                }
            }
        }
        print_r($users);
        if($failed == TRUE){
            $_SESSION['fail_login'] = TRUE;
            header("Location: index.php");
        }
        else{
            header("Location: main.php");
        }
        ?>
    </body>
</html>