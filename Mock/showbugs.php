<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Bugs</title>
    <link type = "text/css" rel="stylesheet" href="stylesheet.css" />
</head>
<body>


<div id = "header">

    <img src="http://s32.postimg.org/yt4i6o02d/logo.png">
    <h1>Bug Tracker</h1>
    <p>Keeping track of all the little pesky bugs</p>


</div>


<div id = "navigation"> <br>
    <a href="showbugs.html">Android Bugs</a> <br>
    <br>
    <a href="showbugs.html">iOS Bugs</a> <br>
    <br>
    <a href="showbugs.html">Windows Bugs</a> <br>
    <br>
    <a href="addbugs.html">Insert Bugs</a> <br>
    <br>

</div>


<div id = content>

    <?
    include ("connection.php");
    $sql_query = "SELECT * FROM bugs";
    $result = $db->query($sql_query);

    while($row = $result->fetch_array())
    {
    $Name = $row["Name"];
    $Summary = $row["Summary"];
    $Category = $row["Category"];
    }

    echo "{$Name} <br>"


    ?>




</div>


<div id = "footer">

    <p> Designed by Connor Rose, 2016</p>

</div>


</body>
</html>