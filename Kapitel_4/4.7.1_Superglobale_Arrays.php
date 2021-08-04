<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Array: $_POST START -->
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

 <!-- Array: $_POST END -->

 <!-- Array: $_GET START -->

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

<!-- Array: $_GET END -->

<!-- Array: $_FILES START  -->
<form action="test_env.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
 ?>

<!-- Array: $_FILES END  -->

<!-- Array: $_REQUEST START -->
    <form method="post" action="test_env.php">
    Name: <input type="text" name="fname">
    Phone: <input type="text" name="fnumber">
    Adress: <input type="text" name="fadress">
    Location: <input type="text" name="flocation">
    <input type="submit">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        $phone = $_REQUEST['fnumber'];
        $adress = $_REQUEST['fadress'];
        $location = $_REQUEST['flocation'];
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
          echo "<br/>";
          echo $phone;
          echo "<br/>";
          echo $adress;
          echo "<br/>";
          echo $location;
        }
      }
    ?>
<!-- Array: $_REQUEST END -->

<!-- Array: $_COOKIE START -->
<?php
$content = 'Fischers Fritz fischt frische Fische';
setcookie('Tonguebreaker', $content, time()+86400);

echo $_COOKIE['Tonguebreaker'];
 ?>
<!-- Array: $_COOKIE END -->


<!-- Array: $_SESSION START -->
<form method="post" action="test_env.php">
Name: <input type="text" name="fname">
Phone: <input type="text" name="fnumber">
<input type="submit">
</form>
<?php
$name = $_POST["fname"];
$phone = $_POST["fnumber"];

$_SESSION["name"] = $name;
$_SESSION["number"] = $phone;
echo "Session variables are set.";

echo "<br/>";
echo $_SESSION["name"];
echo "<br/>";
echo $_SESSION["number"];
print_r($_SESSION);
 ?>


 <?php

 /**
  * 0: PHP_SESSION_DISABLED;
  * 1: PHP_SESSION_NONE;
  * 2: PHP_SESSION_ACTIVE;
  */

 session_start();

 if(session_status() == PHP_SESSION_ACTIVE) {
     $_SESSION['kundennummer'] = 17245;
 } else {
     echo "Keine session vorhanden";
 }
 
 echo session_status();
  ?>
<!-- Umgebungsvariablen  -->
<?php phpinfo(); ?>
<!-- Array: $_SESSION END --> 

<!-- Array: $_SERVER START -->
<?php
echo $_SERVER['SERVER_NAME'];
echo "<br/>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br/>";
echo $_SERVER['PHP_SELF'];
echo "<br/>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br/>";
echo $_SERVER['HTTP_REFERER']; 
?>
<!-- Array: $_SERVER END -->

<!-- Array: $_GLOBALS START -->
<?php 
$duck = "active";

function accessDuck()
 {
    echo $GLOBALS["duck"] = "off";
 }

 accessDuck()
?>

<!-- Array: $_GLOBALS END -->





</body>
</html>