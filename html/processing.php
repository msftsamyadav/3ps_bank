<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1;url=processing.php">
<title>GITMAD BANK</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" /> 
<script type="text/javascript" src="iepngfix_tilebg.js"></script> 
<script type="text/javascript" src="iepngfix.js"></script> 
</head>
<center>
<div id="leftPanel">
  <div class="about">
   <h2>GITMAD Bank</h2>
   <h3>GITMAD Bank will fulfill all your needs</h3>
  </div>
</div>
</center>

<?php

//connect to mysql server

$link = mysql_connect('128.61.105.48', 'gt', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

else{
//code goes here
$username = @$_POST['username'];
$password = @$_POST['password'];


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
$result2 = mysql_query("SELECT balance FROM account WHERE account_id='3'") or die(mysql_error());
$row2 = mysql_fetch_row($result2);
$person3 = $row2[0];

$euro= "1.32";
$rupee="51";

$person2 *= $rupee;
$person3 *=$euro;





?>
<br><br><br><br>
<center>
<table border="0" cellpadding="5" cellspacing="0" >
<style type="text/css">
</style>
<tr>
<th>Account Holder</th>
<th>Current Balance</th>
</tr>
<tr>
<td>Jason Yim</td>
<td><?php echo $person1." dollars"; ?></td>
</tr>
<tr>
<td>Vishnu Rajeevan</td>
<td><?php echo $person2." rupees"; ?></td>
</tr>
<tr>
<td>Sameer Yadav</td>
<td><?php echo $person3." euro"; ?></td>
</tr>
</td>
</table>
</center>
<?php

if($result == null){
echo "Query returned null";
}


 }//end_of_else

?>
</html>