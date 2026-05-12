<?php

session_start();
session_unset();
session_destroy();

echo "Logged out successfuly! <br>";

?>
<button type="button" onclick="location.href='login.php'">Go back to Homepage</button>