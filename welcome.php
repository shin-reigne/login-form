<?php
session_start();

$user = $_SESSION['user'];
echo "<h1> Welcome, " . $user['firstname'] . "</h1><br>";

echo "<b>My Profile: </b> <br>" ;

echo "Name: "       . $user['firstname'] . " " . $user['lastname'] . "<br>";
echo "Password: "   . $user['password'] . "<br>";
echo "Email: "      . $user['email'] . "<br>";
echo "Course: "     . $user['course'] . "<br>";
echo "Section: "    . $user['section'] . "<br>";

?>
<button type="button" onclick="location.href='logout.php'">Log Out</button>