<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Session Login Page</title>
</head>
<body>
<h1>Session Login Page</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="Process.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"
            /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />
        <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo
        ;?></div>
</div>
</body>
</html>