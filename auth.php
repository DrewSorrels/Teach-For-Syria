<?php
$username = $_POST['username'];
$password = $_POST['password'];
 
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('user', $conn);
 
$username = mysql_real_escape_string($username);
$query = "SELECT *
        FROM login
        WHERE username = '$username';";
 
$result = mysql_query($query);
 
if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: login.php');
}
else
{
	header('Location: index.php');
}
?>