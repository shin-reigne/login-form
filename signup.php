<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp</title>
    </head>
    <body>
        <h1>SignUp</h1>
        <form method="post" action="signupController.php">
            <label for="usernameInput">Username: </label><br>
            <input type="text" id="usernameInput" name="username"><br><br>

            <label for="passwordInput">Password: </label> <br>
            <input type="password" id="passwordInput" name="password"><br><br>

            <label for="repeatpassword">Repeat Password: </label><br>
            <input type="password" id="repeatpassword" name="repeatpassword"><br><br>

            <label for="email">Email: </label> <br>
            <input type="text" id="email" name="email"><br><br>

            <label for="firstname">FirstName: </label><br>
            <input type="text" id="firstname" name="firstname"><br><br>

            <label for="lastname">LastName: </label> <br>
            <input type="text" id="lastname" name="lastname"><br><br>

            <label for="usernameInput">Course: </label><br>
            <input type="text" id="usernameInput" name="course"><br><br>

            <label for="section">Section: </label> <br>
            <input type="text" id="section" name="section"><br><br>



            <button type="submit">Signup</button>
            <button><a href="login.php">Cancel</a></button>

        </form>
    </body>
</html>