<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LogIn Page</title>
    </head>
    <body>
        <h1>LOGIN</h1>
        <form method="POST" action="loginController.php">
            <label for="username">Username: </label><br>
            <input type="text" id="usernameInput" name="username" ><br><br>

            <label for="password">Password: </label> <br>
            <input type="password" id="passwordInput" name="password" ><br><br>

            <button type="submit">LogIn</button>
            <button><a href="signup.php">Register</a></button>
        </form>
    </body>
</html>