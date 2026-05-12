<?php

session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_SESSION['user'])) {

            $user = $_SESSION['user'];

            if($username === $user['username'] AND password_verify($password, $user['password'])) { 
                echo "Welcome, " . $user['firstname'] . " " . $user['lastname'];
                ?>
                <br><button type="button" onclick="location.href='welcome.php'">Go to Welcome page</button>
                <?php
            }
        }else{
            echo "Invalid username or password. Please try again! <a href='login.php'>Go back to signup again</a>"; 
        }
    } else{
        echo "You Submitted Wrong Method!";
}
?>