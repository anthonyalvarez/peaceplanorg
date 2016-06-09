<html>
<head>
<title>World Peace Society</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society">
<link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body link="#666666" alink="#660000" vlink="#333333">



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
		        
	<tr>
	<td align="center">
<img src="images/worldpeacesociety_logo.jpg" align="center" alt="World Peace Society" border="0">
<br>
<img src="images/worldpeacesociety_banner500.jpg" alt="World Peace Society" border="0">
<br>
	</td>
	</tr>
	<tr>
	<td>
<font size="3">	 <b>Thank You for signing this petition for peace.
<br>
As many more people do this, the world will recognize we must have peace.</b>
<br>
<br>
Below are ten of the latest Peace Petitioners. <a href="petitioners.php">CLICK HERE!</a> to see more.
<br>
<br>
<br>
While you're on this page you can <a href="poems/whysignpetition.php"><font size="3">click here</font></a> and send <b>"Why You Should Sign The Petition"</b>, <b>"Way To Peace"</b> and the <b>"Petition For Peace"</b> to a friend or contact. 
</font>  
<br><br>
<center><h2>World Peace Society&reg; Peace Petitioners</h2></center>
<table>
	<tr>
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
		"FROM peace_petitions WHERE world != 'member' " .
		"ORDER BY sign_date DESC limit 10";
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
</tr>
<tr><td>
<br>
<a href="join.php"><font size="3"><b>Next</b></font> </a>
</td></tr>
	</td>
	</tr>
	</table>
	</td>
	<td width="10">
<img src="images/blank.gif" width="10" border="0"></td>
    <td valign="top" width="450" align="left"> 
      <p><br>



   </td>
  </tr>
</table>
<p align="center">
<span class="footer">


    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<?php 
		include("bottommenu.html");
	?>
	</table>
	</td>

<font size="1">
&copy; 1988-2006 World Peace Society and Growth Network. All rights reserved.</font></span>
</p>
</body>
</html>