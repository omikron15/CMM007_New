<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello</h1>

<?php
include("connection.php");


$user = $_GET['user1'];

$sql = "SELECT username FROM users";

$result = mysqli_query($db, $sql);
foreach($result as $row){

    echo "".$row[username]."<br/>";

}

echo "The logged in user is: ". $user;

?>


</body>
</html>