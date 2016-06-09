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
       $world = "member";
       $essay1 = trim($_REQUEST['essay1']);
       $organization = trim($_REQUEST['organization']);
       $zip = trim($_REQUEST['zip']);
       $email = strtolower(trim($_REQUEST['email'])); //lower case email address - case insensitive
	
	//required field check
	if ($email == "") $errmsg .= "Please enter your e-mail address.\\n";
	if(! preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)) {
		$errmsg .= "Please enter a vaild e-mail address.\\n";
	}
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
                            "world, " .
                            "essay1, " .
                            "organization, " .
                            "zip, " .
				"sign_date " .
				") VALUES (" .
				"'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', now())",
                             mysql_real_escape_string($fname),
                             mysql_real_escape_string($lname),
                             mysql_real_escape_string($address_1),
                             mysql_real_escape_string($address_2),
                             mysql_real_escape_string($phone),
                             mysql_real_escape_string($email),
                             mysql_real_escape_string($city),
                             mysql_real_escape_string($state),
                             mysql_real_escape_string($country),
                             mysql_real_escape_string($world),
                             mysql_real_escape_string($essay1),
                             mysql_real_escape_string($organization),
                             mysql_real_escape_string($zip)
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
<script language="Javascript">
function validate(f) {
	if (f) {
		var emailfilter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (emailfilter.test(f.email.value)) return true;
	}
	alert("Please enter a valid e-mail address");
	return false;
}
</script>
</head>

<body link="#666666" alink="#660000" vlink="#333333">
<table width="720" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#FFFFFF">
  <tr> 
    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
	    <td width="100"><img src="images/blank.gif" width="1" height="85" border="0"></td>
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


<img src="images/blank.gif" width="200" height="1" alt="World Peace Society" border="0">
<img src="images/worldpeacesociety_logo.jpg" alt="World Peace Society" border="0">
<br>
<img src="images/worldpeacesociety_banner500.jpg" alt="World Peace Society" border="0">

<font size="4">	 
<br><br><br>
<b>
<center />
Thank You for your submission
<br>
<br>
We welcome your participation</b>
</center>
<br>
<br>
<br>
</font>      <br>
      <br>
      <br>
      <br>
      <br>
<?php } else { ?>
	<br>
	<br>
	<br>
<img src="images/blank.gif" width="200" height="1" alt="World Peace Society" border="0">
<img src="images/worldpeacesociety_logo.jpg" alt="World Peace Society" border="0">
<br>
<img src="images/worldpeacesociety_banner500.jpg" alt="World Peace Society" border="0">

<font size="5"><font color="000000">

<b><center />YOU CAN HELP
<br>
<u>JOIN US</u></font> </b><br><br></font>
<br>
<br>
<font size="3"><b>BECOME A PART OF HISTORY
<br>
ENCOURAGE THE WORLD TO GO IN NEW DIRECTIONS</b></center></font>
<br>
<br>
<br>
<font size="3"><font color="000000"><b>The following line lists the first year dues for each membership: </b></font>  </font>
<br>
<br>
<table>
<tr>
                        <td width="100">
				<input type="radio" name="invitecode" value="Single" >Single
                        </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Family" >Family
	                 </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Organization" >Organization
                       </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Silver" >Silver
                       </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Gold" >Gold
                       </td>
</tr>
<tr>
                        <td>
				 $75
                        </td>
                        <td>
				$100
	                 </td>
                        <td>
				$250
                       </td>
                        <td>
				$500
                       </td>
                        <td>
				$1,000
                       </td>
</tr>
</table>
<br>
<br>
<font color="000000"><b>Renewal membership is on a year-to-year basis. </b></font> 
<br>
<br>
<table>
<tr>
                        <td width="100">
				<input type="radio" name="invitecode" value="Single" >Single
                        </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Family" >Family
	                 </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Organization" >Organization
                       </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Silver" >Silver
                       </td>
                        <td width="200">
				<input type="radio" name="invitecode" value="Gold" >Gold
                       </td>
</tr>
<tr>
                        <td>
				 $25
                        </td>
                        <td>
				$35
	                 </td>
                        <td>
				$100
                       </td>
                        <td>
				$200
                       </td>
                        <td width="200">
				Free yearly renewals
                       </td>
</tr>
</table>
<br>
<br>
Single - Any one person. 
<br>
<br>
Family - Any household, including all people living at that address. 
<br>
<br>
Organization - Any organization, business, or professional group. 
<br>
<br>
Silver - Anyone. 
<br>
<br>
Gold - Anyone. 

<br> 
<br>
<br>
Any and all contributions are welcome.
<br>
<br>
Products, services and facilities useful to us can also be accepted.
<br>
<br>
<br>
<br>

		<form name="appform" action="join.php" method="post" onSubmit="return validate(this);" enctype="multipart/form-data">
		<input type="hidden" name="action" value="add">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td align="left" width="150">Enter Amount: </td>
			<td align="left"><input type="text" name="membership" size="8" value=""> $0.00 USD</td>
		</tr>
		<tr>
			<td align="left" width="150">First Name: </td>
			<td align="left"><input type="text" name="fname" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Last Name:</td>
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
			<td align="left">City:</td>
			<td align="left"><input type="text" name="city" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">State or Province:</td>
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
			<td align="left" colspan="2"><br><b>Message</b>&nbsp;<i>(Optional) Limit to 30 words. If longer, please send via email.</i></td>
		</tr>
		<tr>
			<td align="left" colspan="2"><textarea name="essay1" rows="5" cols="60"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" height="10">&nbsp;</td>
		</tr>

		<tr>
			<td align="left" colspan="2"><br><input type="submit" name="submit" value="Send"><br><br><br></td>
		</tr>
</table>                                 </form>

 </font>

<?php } ?>
   </td>
  </tr>
</table>
<br>
<center /><a href="contactus.php"><font size="3"><b>Next</b></font> </a></center>
<p align="center">
<span class="footer">
<br>
<br>
<br>
<br>
	<?php 
		include("bottommenu.html");
	?>


<br>
<br>
&copy; World Peace Society, All Rights Reserved.</span>
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