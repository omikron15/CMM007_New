<?php
include("connection.php");

if (empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Please enter information for both fields";
}
else {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT uid FROM users WHERE username= '$username' and password= '$password'";

    $result = mysqli_query($db, $sql);


    if (mysqli_num_rows($result) == 1) {
        header("location: home.php"); //Redirect to new page
    } else {
        //problems with this whole if statment so i tried to get the fail condition to also display the result of the comparison.
        //it didnt work
        echo $sql ;

    }


}

?>