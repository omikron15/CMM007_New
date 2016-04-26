<?php

//echo $_COOKIE['Username'] . "<br/>";
session_start();
echo $_SESSION['User'] . "<br/>";
displayAccessLevelInformation($_SESSION['Access_Level']);

function displayAccessLevelInformation($access_level) {
    if ($access_level == "LEVEL_1") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}



?>