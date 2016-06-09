<html>
<head>
<title>World Peace Society&reg;</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society&reg;">
<link href="../../css/styles.css" rel="stylesheet" type="text/css">
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
<center><h2>World Peace Society&reg; Members</h2></center>
<table border="0" cellspacing="10" cellpadding="0" width="100%">
<tr align="left">
	<td>First Name</td>
	<td>Last Name</td>
	<td>Email</td>
	<td>Address</td>
	<td>City</td>
	<td>State</td>
</tr>
<?php

require_once 'php_inc/constants.php';
require_once 'php_inc/db.php';

$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $dblink);

$sql = "SELECT " .
		"id, " .
		"first_name, " .
		"last_name, " .
		"email, " .
		"address_1, " .
	 	"city, " .
		"state " .
		"country " .
		"FROM peace_petitions WHERE world = 'member' " .
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
		$country = $row[$i++];
?>
	<tr>
		<td><a href="view.php?id=<?= $id ?>"><?= $first_name ?></a></td>
		<td><a href="view.php?id=<?= $id ?>"><?= $last_name ?></a></td>
		<td><a href="mailto:<?= $email ?>"><?= $email ?></a></td>
		<td><a href="view.php?id=<?= $id ?>"><?= $address_1 ?></a></td>
		<td><a href="view.php?id=<?= $id ?>"><?= $city ?></a></td>
		<td><a href="view.php?id=<?= $id ?>"><?= $state ?></a></td>
		<td><a href="view.php?id=<?= $id ?>"><?= $country ?></a></td>
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