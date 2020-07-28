<?php
    include_once "users.php";
    if(isset($_POST['submit'])){
        $msg;
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $user = new User;
        $user->setEmail($email);
        $user->setPassword($pass);

        if($user->isPasswordCorrect()){
            $user->login();
            $user->createUserSession();
        }
        else{
            echo 'Error: Failed login';

        }
    } 
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale =1.0">
            <title> Document</title>
        </head>
        <body>
            <div>
            </div>
        </body>
    </html>