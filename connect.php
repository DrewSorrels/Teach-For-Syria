<?php
$connection = mysql_connect('eventhack.ccfxs2sfazcf.us-west-2.rds.amazonaws.com:3306', 'eventhack', 'password');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('eventhack');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}