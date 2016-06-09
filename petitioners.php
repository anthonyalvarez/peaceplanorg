<html>
<head>
<title>World Peace Society</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society">
<link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body link="#666666" alink="#660000" vlink="#333333">
  <?php include_once("analyticstracking.php") ?>



<table width="720" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#FFFFFF">


  <tr>
    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<?php
		include("leftmenu.html");
	?>



	</table>
	</td>
    <td width="30"><img src="images/blank.gif" width="10" border="0"></td>
    <td width="720" valign="top" align="left">
	<table width="100%" border="0" cellpsacing="0" cellpadding="0">
<center />

<img src="images/blank.gif" width="200" height="1" alt="World Peace Society" border="0">
<img src="images/worldpeacesociety_logo.jpg" align="center" alt="World Peace Society" border="0">
<br>
<img src="images/worldpeacesociety_banner500.jpg" alt="World Peace Society" border="0">
</center>
<br>
	<tr>
<center><h2>World Peace Society&reg; Peace Petitioners</h2></center>
<table border="0" cellspacing="10" cellpadding="0" width="100%">
<tr align="left">
	<td><u><b>First Name</b></u></td>
	<td><u><b>Last Name</b></u></td>
	<td><u><b>City</b></u></td>
	<td><u><b>State</b></u></td>
	<td><u><b>Country</b></u></td>
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
		"state, " .
		"zip, " .
		"country, " .
		"phone, " .
		"organization, " .
		"essay1, " .
		"sign_date " .
		"FROM peace_petitions " .
		"ORDER BY sign_date ASC limit 20";
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
		<td><?= $first_name ?></td>
		<td><?= $last_name ?></td>
		<td><?= $city ?></td>
		<td><?= $state ?></td>
		<td><?= $country ?></td>
	</tr>
<?php
	}
	mysql_free_result($result);
}
mysql_close($dblink);

?>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="petitioners.php"><i>Additional signers are not shown but let&#39;s grow the list to millions </i></a>
<br>
<br>
<br>
<a href="join.php"><font size="3"><b>Next</b></a>

 </font>
<br>
<br>
<br>
<br>

	</tr>
	</table>
	</td>
	<td width="10"><img src="images/blank.gif" width="10" border="0"></td>
    <td valign="top" width="450" align="left">
      <p><br>



   </td>
  </tr>
</table>
<p align="center">
<span class="footer">


	<?php
		include("bottommenu.html");
	?>

<center>
<br>
<font size="1">
&copy; 1988-2006 World Peace Society and Growth Network. All rights reserved.</font></span>
</center>
</p>
</body>
</html>
