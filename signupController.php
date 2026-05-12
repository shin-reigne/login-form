<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $repeatpassword = htmlspecialchars($_POST['repeatpassword']);
    $email = htmlspecialchars($_POST['email']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $course = htmlspecialchars($_POST['course']);
    $section = htmlspecialchars($_POST['section']);

    try {
        require_once 'dbh.inc.php';
        require_once 'userData.inc.php';

        $user = new User($username, $password, $email, $firstname, $lastname, $course, $section);

        
        $dbConn = new DatabaseConnection();
        $conn = $dbConn->connect();

        //var_dump($conn);

        $user->validate();
        if($user->password === $repeatpassword){
            echo "Registration Succesful!" . $user->firstname  . " " . $user->lastname . "<br><br>";
            ?>
            <button type="button" onclick="location.href='login.php'">Go to Login</button>
            <?php

        } else{
            echo"Password doesn't match. Please try again!<a href='signup.php'>Go back to signup again</a>";
        }

        $hashedpw = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION["user"] = [
            "username" => $user->username,
            "password" => $hashedpw,
            "email" => $user->email,
            "firstname" => $user->firstname,
            "lastname" => $user->lastname,
            "course" => $user->course,
            "section" => $user->section
        ];

        $query = "INSERT INTO user (username, password_hash, email, firstname, lastname, course, section) VALUES (?, ?, ?, ?, ?, ?, ?);";
        //$query = "INSERT INTO loginform (username, password_hash, email, first_name, last_name, course, section) VALUES (:username, :password_hash, :email, :first_name, :last_name, :course, :section);";
        $statement = $conn->prepare($query);
        $statement->bindParam(1, $user->username);
        $statement->bindParam(2, $hashedpw);
        $statement->bindParam(3, $user->email);
        $statement->bindParam(4, $user->firstname);
        $statement->bindParam(5, $user->lastname);
        $statement->bindParam(6, $user->course);
        $statement->bindParam(7, $user->section);

        $statement->execute();
        echo "User data saved successfully";
        $statement = null;
        $conn = null;



    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else{
    echo "You Submitted Wrong Method!";
}

?>
