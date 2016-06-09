<html>
<head>
<title>World Peace Society&reg;</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society&reg;">
<link href="../../../css/styles.css" rel="stylesheet" type="text/css">
<SCRIPT language="JavaScript">
<!--hide

var password;

var pass1="levene1";

password=prompt('',' ');

if (password==pass1)
  alert('');
else
   {
    window.location="http://www.worldpeacesociety.org";
    }

//-->
</SCRIPT>


<body>
<center><h2>World Peace Society&reg; Peace Petitioners</h2></center>
<table border="0" cellspacing="10" cellpadding="0" width="100%">
<tr align="left">
	<td><u><b>ID</b></u></td>
	<td><u><b>First Name</b></u></td>
	<td><u><b>Last Name</b></u></td>
	<td><u><b>Email</b></u></td>
	<td><u><b>Address</b></u></td>
	<td><u><b>City</b></u></td>
	<td><u><b>State</b></u></td>
	<td><u><b>Zip</b></u></td>
	<td><u><b>Country</b></u></td>
	<td><u><b>Phone</b></u></td>
	<td><u><b>Signing Date</b></u></td>
	<td><u><b>Organization</b></u></td>
	<td><u><b>Comment</b></u></td>
</tr>
<?php

require_once '../php_inc/constants.php';
require_once '../php_inc/db.php';

$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $dblink);

$sql = "SELECT " .
		"id, " .
		"first_name, " .
		"last_name, " .
		"email, " .
		"address_1, " .
	 	"city, " .
		"state, " .
		"zip, " .
		"country, " .
		"phone, " .
		"organization, " .
		"essay1, " .
		"sign_date " .
		"FROM peace_petitions WHERE world != 'member' " .
		"ORDER BY sign_date ASC";
$result = mysql_query($sql);
if ($result) {
	while ($row = mysql_fetch_row($result)) {		
		$i = 0;
		$id = $row[$i++];
		$first_name = $row[$i++];
		$last_name = $row[$i++];
		$email = $row[$i++];
		$address_1 = $row[$i++];
		$city = $row[$i++];
		$state = $row[$i++];
		$zip = $row[$i++];
		$country = $row[$i++];
		$phone = $row[$i++];
		$organization = $row[$i++];
		$essay1 = $row[$i++];
		$sign_date = $row[$i++];
?>
	<tr>
		<td><?= $id ?></td>
		<td><?= $first_name ?></td>
		<td><?= $last_name ?></td>
		<td><?= $email ?></td>
		<td><?= $address_1 ?></td>
		<td><?= $city ?></td>
		<td><?= $state ?></td>
		<td><?= $zip ?></td>
		<td><?= $country ?></td>
		<td><?= $phone ?></td>
		<td><?= $sign_date ?></td>
		<td><?= $organization ?></td>
		<td><?= $essay1 ?></td>
	</tr>
<?php
	}
	mysql_free_result($result);
}
mysql_close($dblink);

?>
</table>
</body>
</html>