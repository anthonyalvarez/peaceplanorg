<?php 
$submitted = 0;
$errmsg = "";
if ($_REQUEST['action'] == "add") {
       $fname = trim($_REQUEST['fname']);
       $lname = trim($_REQUEST['lname']);
       $address_1 = trim($_REQUEST['address_1']);
       $address_2 = trim($_REQUEST['address_2']);
       $phone = trim($_REQUEST['phone']);
       $city = trim($_REQUEST['city']);
       $state = trim($_REQUEST['state']);
       $country = trim($_REQUEST['country']);
       $zip = trim($_REQUEST['zip']);
       $email = strtolower(trim($_REQUEST['email'])); //lower case email address - case insensitive
	

	//required field check
	$errmsg = "";
	if ($fname == "") $errmsg .= "Please enter name.\\n";
	if ($lname == "") $errmsg .= "Please enter your last name.\\n";
	if ($city == "") $errmsg .= "Please enter your city.\\n";
	if ($state == "") $errmsg .= "Please enter your state.\\n";




	if ($errmsg == "") {
		require_once '../php_inc/db.php';
		$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname, $dblink);
		//insert subscription
		$sql = sprintf("INSERT INTO peace_petitions (" .
	            "first_name, " .
                            "last_name, " .
                            "address_1, " .
                            "address_2, " .
                            "phone, " .
                            "email, " .
                            "city, " .
                            "state, " .
                            "country, " .
                            "zip, " .
                            "organization, " .
                            "essay1, " .
				"sign_date " .
				") VALUES (" .
				"'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', now())",
                             mysql_real_escape_string($fname),
                             mysql_real_escape_string($lname),
                             mysql_real_escape_string($address_1),
                             mysql_real_escape_string($address_2),
                             mysql_real_escape_string($phone),
                             mysql_real_escape_string($email),
                             mysql_real_escape_string($city),
                             mysql_real_escape_string($state),
                             mysql_real_escape_string($country),
                             mysql_real_escape_string($zip),
                             mysql_real_escape_string($organization),
                             mysql_real_escape_string($essay1)
                         );
		mysql_query($sql);
		$submitted = 1;
		mysql_close($dblink);
	}
}
?>

<html>
<head>
<title>World Peace Society</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society">
<link href="css/styles.css" rel="stylesheet" type="text/css">


</head>

<body link="#666666" alink="#660000" vlink="#333333">
<table width="720" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#FFFFFF">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td>&nbsp;</td>
    <td colspan="4" align="center" height="115"> 
      <table width="720" border="0" cellspacing="0" cellpadding="0" height="115">
		<tr> 
			<td align="left" width="620" height="74"><center />
		        
		        <img src="images/worldpeacesociety_logo.jpg" alt="World Peace Society" border="0">
<br>
		        <img src="images/worldpeacesociety_banner500.jpg" alt="World Peace Society" border="0">
			</center></td>
		</tr> 
      </table>
    </td>
  </tr>
  <tr> 
    <td width="150" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
	    <td width="300"><img src="images/blank.gif" width="1" height="5" border="0"></td>
	</tr>
	<?php 
		include("leftmenu.html");
	?>
	</table>
	</td>
    <td width="30"><img src="images/blank.gif" width="10" border="0"></td>
	<td width="10"><img src="images/blank.gif" width="10" border="0"></td>
    <td valign="top" width="510" align="left"> 
<?php if ($submitted) { ?> 	
      <p><br>
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
	</table>
  
<?php } else { ?>
	<br>
<font size="3"><font color="000000">
<b>PETITION FOR PEACE </b>
<br>
<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;by
<br>
David Levene</font>
<br>
<br>
We want peace! 
<br>
Not only in the Middle East, but everywhere 
<br>
Throughout the whole world, peace should prevail 
<br>
While tyranny and oppression lead to no avail. 
<br>
<br>
A better world can thrive and exist, 
<br>
World Peace Society's efforts to make it so must persist 
<br>
And you can help bring such a situation about 
<br>
By signing this petition you show your clout. 
<br>
<br>
A specific plan for peace must be utilized 
<br>
One that the world has not yet realized 
<br>
'World Peace Now and Forever' may do 
<br>
But alternatives should be examined thru and thru. 
<br>
<br>
Let our leaders and representatives know for sure 
<br>
That anything less they show - will not endure 
<br>
Yes, all our efforts must persist 
<br>
Until a more just and better world does exist. 
 </font>
<br>
<br>
<font size="1">
&copy; 2006 Growth Network. All rights reserved.</font>
<br>
<br>
<br>
<br>
<font size="1">Only Names, City, State and Country will be displayed publicly.
All other information will be used solely by World Peace Society.
</font>
<br>
<br>

<font size="3"><b>To sign this petition and/or make a contribution, fill out the form below. </b></font>

<br>
<br>

<font size="1"> <font color="a91515">*Required</font>
</font>
<br>
<br>

		<form name="appform" action="peace_petitions.php" method="post" onSubmit="return validate(this);" enctype="multipart/form-data">
		<input type="hidden" name="action" value="add">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td align="left" width="150"><font color="a91515">*</font>First Name: </td>
			<td align="left"><input type="text" name="fname" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left"><font color="a91515">*</font>Last Name:</td>
			<td align="left"><input type="text" name="lname" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">E-mail:</td>
			<td align="left"><input type="text" name="email" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Organization:</td>
			<td align="left"><input type="text" name="organization" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Phone:</td>
			<td align="left"><input type="text" name="phone" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Address:</td>
			<td align="left"><input type="text" name="address_1" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left"><input type="text" name="address_2" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left"><font color="a91515">*</font>City:</td>
			<td align="left"><input type="text" name="city" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left"><font color="a91515">*</font>State or Province:</td>
			<td colspan="2">
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
			<tr>
			    <td><select class="textbox" name="state">
					<option value=""></option>
					<option value="AA" >AA - Armed Forces Americas</option>
					<option value="AE" >AE - Armed Forces Europe</option>
					<option value="AL" >Alabama</option>
					<option value="AK" >Alaska</option>
					<option value="AB" >Alberta</option>
					<option value="AS" >American Samoa</option>
					<option value="AP" >AP - Armed Forces Pacific</option>
					<option value="AZ" >Arizona</option>
					<option value="AR" >Arkansas</option>
					<option value="BC" >British Columbia</option>
					<option value="CA" >California</option>
					<option value="CO" >Colorado</option>
					<option value="CT" >Connecticut</option>
					<option value="DE" >Delaware</option>
					<option value="DC" >District of Columbia</option>
					<option value="FL" >Florida</option>
					<option value="GA" >Georgia</option>
					<option value="GU" >Guam</option>
					<option value="HI" >Hawaii</option>
					<option value="ID" >Idaho</option>
					<option value="IL" >Illinois</option>
					<option value="IN" >Indiana</option>
					<option value="IA" >Iowa</option>
					<option value="KS" >Kansas</option>
					<option value="KY" >Kentucky</option>
					<option value="LA" >Louisiana</option>
					<option value="ME" >Maine</option>
					<option value="MB" >Manitoba</option>
					<option value="MD" >Maryland</option>
					<option value="MA" >Massachusetts</option>
					<option value="MI" >Michigan</option>
					<option value="MN" >Minnesota</option>
					<option value="MS" >Mississippi</option>
					<option value="MO" >Missouri</option>
					<option value="MT" >Montana</option>
					<option value="NE" >Nebraska</option>
					<option value="NV" >Nevada</option>
					<option value="NB" >New Brunswick</option>
					<option value="NF" >Newfoundland and Labrador</option>
					<option value="NH" >New Hampshire</option>
					<option value="NJ" >New Jersey</option>
					<option value="NM" >New Mexico</option>
					<option value="NY" >New York</option>
					<option value="NC" >North Carolina</option>
					<option value="ND" >North Dakota</option>
					<option value="MP" >Northern Mariana Islands</option>
					<option value="NT" >Northwest Territories</option>
					<option value="NS" >Nova Scotia</option>
					<option value="OH" >Ohio</option>
					<option value="OK" >Oklahoma</option>
					<option value="ON" >Ontario</option>
					<option value="OR" >Oregon</option>
					<option value="PA" >Pennsylvania</option>
					<option value="PE" >Prince Edward Island</option>
					<option value="PR" >Puerto Rico</option>
					<option value="QC" >Quebec</option>
					<option value="RI" >Rhode Island</option>
					<option value="SK" >Saskatchewan</option>
					<option value="SC" >South Carolina</option>
					<option value="SD" >South Dakota</option>
					<option value="TN" >Tennessee</option>
					<option value="TX" >Texas</option>
					<option value="TT" >Trust Territory</option>
					<option value="UT" >Utah</option>
					<option value="VT" >Vermont</option>
					<option value="VA" >Virginia</option>
					<option value="VI" >Virgin Islands</option>
					<option value="WA" >Washington</option>
					<option value="WV" >West Virginia</option>
					<option value="WI" >Wisconsin</option>
					<option value="WY" >Wyoming</option>
					<option value="YT" >Yukon</option>
				</select>
				&nbsp;Zip:&nbsp;&nbsp;
			    <input class="textbox" size="10" name="zipcode" value=""></td>           
			</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td></td>
		    <td>
				<input type="radio" name="country" value="US" checked> US Resident<br>
				<input type="radio" name="country" value="OTHER" > Other&nbsp;
				<input type="text" name="country_other" value="" size="20"> 
			</td>
		    
		</tr>
		<tr>
			<td colspan="2" height="10">&nbsp;</td>
		</tr>

		<tr>
			<td align="left" colspan="2"><br><input type="submit" name="submit" value="Submit"><br><br><br></td>
		</tr>
</table>                                 </form>

</center>
<br>
 </font>

<?php } ?>
   </td>
  </tr>
</table>
<br>
<center /><a href="join.php"><font size="3"><b>Next</b></font> </a></center>
<p align="center">
<span class="footer">


    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<?php 
		include("bottommenu.html");
	?>
	</table>
	</td>

&copy;1988-2006 World Peace Society and Growth Network. All rights reserved.</span>
</p>
<?php 
	//alert error message if any
	if ($errmsg != "") {
?>
<script language="Javascript">
<!--
	alert("<?= $errmsg ?>");
//-->
</script>
<?php	} ?>
</body>
</html>