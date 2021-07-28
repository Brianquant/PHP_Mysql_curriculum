<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Array: POST START -->
<form action="" method="POST">
    <input type="text" name="loginName" />
    <input type="password" name="loginPass" />
    <input type="submit" name="doLogin" value="Einloggen" />
</form>

<?php
$loginName = $_POST["loginName"];
$loginPass = $_POST["loginPass"];

if(isset($loginName) || isset($loginPass)) {
    echo "<p>$loginName</p>";
    echo "<br/>";
    echo "<p>$loginPass</p>";
}
 ?>

 <!-- Array: POST END -->

 <!-- Array: GET START -->

 <form action="test_env.php" method="GET">
    <input type="text" name="loginName" />
    <input type="text" name="number" />
    <input type="submit" name="doLogin" value="submit" />
  </form>

<?php

    $loginName = $_GET["loginName"];
    $loginNumber = $_GET["number"];

    if(isset($loginName) || isset($loginPass)) {
        echo "<p>$loginName</p>";
        echo "<br/>";
        echo "<p>$loginNumber</p>";
    }

    header('Location: http://192.168.64.2/index.html');
?>

 <!-- Array: GET END -->
 
</body>
</html>