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

$sql = "SELECT username FROM users";

$result = mysqli_query($db, $sql);
echo "Blah blah";
echo $result;

?>


</body>
</html>