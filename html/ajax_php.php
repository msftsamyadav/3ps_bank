<?php

//connect to mysql server

$link = mysql_connect('128.61.105.48', 'gt', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

else{
//code goes here
$username = $_POST['username'];
$password = $_POST['password'];


//retrieve amount values from DB
$db_selected = mysql_select_db('3ps', $link);
if (!$db_selected) {
    die ('Can\'t use 3ps : ' . mysql_error());
}

$result = mysql_query("SELECT balance FROM account WHERE account_id='1'") or die(mysql_error());
$row = mysql_fetch_row($result);
$person1= $row[0];
$result1 = mysql_query("SELECT balance FROM account WHERE account_id='2'") or die(mysql_error());
$row1 = mysql_fetch_row($result1);
$person2 = $row1[0];

echo $person1.":".$person;


?>