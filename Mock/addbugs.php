<?php

include ("connection.php");

$Name = $_POST["Name"];
$Summary = $_POST["Summary"];
$Category = $_POST["Category"];

$sql = "INSERT INTO bugs (bugName, bugSummary, bugCategory) VALUES ('$Name', '$Summary' '$Category')";

if (mysqli_query($db, $sql)) {

}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");

?>