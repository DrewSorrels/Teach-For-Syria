<?php
include('../connect.php');

if($_POST['title'] && $_POST['description'])
{
 $title = $_POST['title'];
 $title = mysql_escape_string($title);
 $descr = $_POST['description'];
 $descr = mysql_escape_string($descr);
 $query = "INSERT INTO card (id, name, description) VALUES (NULL, '".$title."', '".$descr."')";
 $result = mysql_query("$query") or die ("5");

}
?>