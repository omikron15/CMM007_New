<?php

echo $_COOKIE['Username'] . "<br/>";
displayAccessLevelInformation($_COOKIE['Access_Level']);

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