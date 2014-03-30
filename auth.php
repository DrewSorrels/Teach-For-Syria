<?php
require_once 'connect.php';
print_r($_POST);
if (isset($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
$sql = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
$result = mysql_query($sql) or die(mysql_error());
echo $username;
$count = mysql_num_rows($result);
echo $count;
if ($count == 1)
{
    header("Location: welcome.php");
}
else
{
    header("Location: login.php");
}
}
?>