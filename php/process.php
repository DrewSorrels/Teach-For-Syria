<?php
include('../connect.php');

$title = $_POST['title'];
$desc = $_POST['desc'];

if($title && $desc)
{
	echo "Testing";
 $title = mysql_real_escape_string($title); 
 $desc = mysql_real_escape_string($desc);
 $query = "INSERT INTO card ( title, description) VALUES ('".$title."', '".$desc."')";
 $result = mysql_query($query) or die ("5");

}
?>