<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello</h1>

<h2>
    <?php

    session_start();

    echo $_SESSION['username_pass'];
    echo $_SESSION['password_pass'];
    ?>


</h2>

</body>
</html>