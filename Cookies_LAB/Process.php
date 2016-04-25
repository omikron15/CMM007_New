<?php

$Username_C ="Connor";
$Password_C ="Password";

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Please enter information for both fields";
}
else if ($Username_C == $_POST['username'] && $Password_C == $_POST['password']){
//check that username and passwords match.
//allow because match is correct
    header("location: homepage.php?user1=".$Username_C);
    setcookie('Access_Level', 'LEVEL_1');
    setcookie('Username',$_POST['username']);
}else{
//else reject
    echo "invalid login details";
}


?>