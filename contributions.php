<?php 
if ($_REQUEST['action'] == "add") {
	require_once '../php_inc/constants.php';

	$paypalval =  trim($_REQUEST['membership']);	
	$firstname = trim($_REQUEST['firstname']);
	$lastname = trim($_REQUEST['lastname']);
	$email = strtolower(trim($_REQUEST['email'])); //lower case email address - case insensitive
	$phone = trim($_REQUEST['phone']);
	$byear = trim($_REQUEST['byear']);
	$bmonth = trim($_REQUEST['bmonth']);
	$bday = trim($_REQUEST['bday']);
	$dob = $byear."-".$bmonth."-".$bday;
	$address1 = trim($_REQUEST['address1']);
	$address2 = trim($_REQUEST['address2']);
	$city = trim($_REQUEST['city']);
	$state = trim($_REQUEST['state']);
	$country = trim($_REQUEST['country']);
	if ($country == "OTHER") {
		$country = trim($_REQUEST['country_other']);
		if ($country == "") $country = "OTHER";
	}
	$zipcode = trim($_REQUEST['zipcode']);
	$agreetc = trim($_REQUEST['agreetc']);
	$essay1 = trim($_REQUEST['essay1']);
	$signname = trim($_REQUEST['signname']);
	$signdate = trim($_REQUEST['signdate']);
	$invitecode = trim($_REQUEST['invite_code']);
	
	//required field check
	$errmsg = "";
	if ($paypalval == "") $errmsg .= "Please enter membership amount.\\n";
	if ($firstname == "") $errmsg .= "Please enter your first name.\\n";
	if ($lastname == "") $errmsg .= "Please enter your last name.\\n";
	if ($email == "") $errmsg .= "Please enter your e-mail address.\\n";
	if(! preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)) {
		$errmsg .= "Please enter a vaild e-mail address.\\n";
	}
	if ($phone == "") $errmsg .= "Please enter your phone number.\\n";
	if ($address1 == "") $errmsg .= "Please enter your street address.\\n";
	if ($city == "") $errmsg .= "Please enter your city.\\n";
	if ($country == "") $errmsg .= "Please enter your country.\\n";
	if ($country == "1") {
		if ($state == "") $errmsg .= "Please enter your state.\\n";
		if ($zipcode == "") $errmsg .= "Please enter your zip code.\\n";
	}
	



	if ($errmsg == "") {
		require_once '../php_inc/db.php';
		$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname, $dblink);
		//insert application
		$sql = sprintf("INSERT INTO applicant (" .
				   "email, " .
				   "first_name, " .
				   "last_name, " .
				   "phone, " .
				   "dob, " .
				   "address1, " .
				   "address2, " .
				   "city, " .
				   "state, " .
				   "country, " .
				   "postalcode, " .
				   "agreetc, " .
				   "essay1, " .
				   "invite_code, " .
				   "sign_name, " .
				   "sign_date, " .
				   "app_date " .
				   ") VALUES (" .
				   "'%s', '%s', '%s', '%s', '%s', " .
				   "'%s', '%s', '%s', '%s', '%s', " .
				   "'%s', '%s', '%s', '%s', '%s', '%s', now())", 
				   mysql_real_escape_string($email), 
				   mysql_real_escape_string($firstname), 
				   mysql_real_escape_string($lastname), 
				   mysql_real_escape_string($phone),
				   mysql_real_escape_string($dob), 
				   mysql_real_escape_string($address1), 
				   mysql_real_escape_string($address2), 
				   mysql_real_escape_string($city), 
				   mysql_real_escape_string($state), 
				   mysql_real_escape_string($country), 	
				   mysql_real_escape_string($zipcode), 
				   mysql_real_escape_string($agreetc), 
				   mysql_real_escape_string($essay1), 
				   mysql_real_escape_string($invitecode),
				   mysql_real_escape_string($signname), 
				   mysql_real_escape_string($signdate));

		if (! mysql_query($sql)) {
			//duplicate application check if fees paid
			$sql = "SELECT " .
				 	"fee_paid, " .
					"id " .
					"FROM applicant " .
					"WHERE email = '%s'";
			$result = mysql_query(sprintf($sql, mysql_real_escape_string($email)));
			if ($result) {
				if ($row = mysql_fetch_assoc($result)) {
					$id = $row['id'];
					if ($row['fee_paid']) {
						//fees paid for application
						$errmsg .= "We already have an application for ".$email.".\\nPlease contact info@missnyc.com for more information.\\n";
						$email = "";
					} else {
						$errmsg = "Duplicate account";
						$notfeepaid = true;
					}
				} else {
					$errmsg .= "We are experiencing heavy site usage. Please try again after some time.\\n";
				}
				mysql_free_result($result);
			} else {
				$errmsg .= "We are experiencing heavy site usage. Please try again after some time.\\n";
			}
		} 
			
		if ($errmsg == "") {
			$id = mysql_insert_id();
		
			//insert photos
			move_uploaded_file($headshot, $PHOTODIR.$id."_headshot");
			chmod($PHOTODIR.$id."_headshot", 0666);
			move_uploaded_file($bodyshot, $PHOTODIR.$id."_bodyshot");
			chmod($PHOTODIR.$id."_bodyshot", 0666);
			$sql = "INSERT INTO applicant_photo_mimetype (" .
				   "applicant_id, " .
				   "photo_key, " .
				   "mime_type " .
				   ") VALUES (" .
				   "%s, '%s', '%s')";
			mysql_query(sprintf($sql, $id, "headshot", mysql_real_escape_string($headshotmime)));
			mysql_query(sprintf($sql, $id, "bodyshot", mysql_real_escape_string($bodyshotmime)));
		}
		mysql_close($dblink);
	}
}

if ($_REQUEST['action'] == "add" && $errmsg == "") {
	//success application
	//Configuration File
	include_once('includes/config.inc.php'); 

	//Global Configuration File
	include_once('includes/global_config.inc.php');
?>
<html>
<head>
<title>World Peace Society</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society">
</head>
<body onLoad="document.paypal_form.submit();">
<form method="post" name="paypal_form" action="<?=$paypal[url]?>">

<?php 
//show paypal hidden variables

showVariables(); 

?> 

<center><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="333333">Loading Petition Processing Page . . . </font></center>

</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Google Code for Signup Conversion Page -->
<script language="JavaScript" type="text/javascript">
<!--
var google_conversion_id = 1069889824;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "666666";
if (1) {
  var google_conversion_value = 1;
}
var google_conversion_label = "Signup";
//-->
</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<img height=1 width=1 border=0 src="http://www.googleadservices.com/pagead/conversion/1069889824/?value=1&label=Signup&script=0">
</noscript>
</body>   
</html>

<?php 
} else {
	//error application or new application
?>

<html>
<head>
<title>World Peace Society</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script language="Javascript">
<!--
function validate(f) {
	if (f) {
		var errmsg = "";

		if (isempty(f.membership.value)) errmsg += "Please enter membership amount.\n";
		if (isempty(f.firstname.value)) errmsg += "Please enter your first name.\n";
		if (isempty(f.lastname.value)) errmsg += "Please enter your last name.\n";
		if (isempty(f.email.value)) errmsg += "Please enter your e-mail address.\n";
		var emailfilter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (! emailfilter.test(f.email.value)) errmsg += "Please enter a valid e-mail address.\n";
		if (isempty(f.phone.value)) errmsg += "Please enter your phone number.\n";
		if (isempty(f.address1.value)) errmsg += "Please enter your street address.\n";
		if (isempty(f.city.value)) errmsg += "Please enter your city.\n";
		if (! f.agreetc.checked) errmsg += "Please check the confirmation box authorizing your application.\n";
		if (isempty(f.signname.value)) errmsg += "Please sign your name at the bottom of the application.\n";
		if (isempty(f.signdate.value)) errmsg += "Please enter today's date at the bottom of the application.\n";

		if (! isempty(errmsg)) {
			alert(errmsg);
			return false;
		}
		return true;
	}
	return false;
}

function isempty(str) {
	if (str) {
		return str.match(/^\s*$/);
	}
	return true;
}

function copyhomeaddr(f) {
	if (f && f.sameashome.checked) {
		f.baddress1.value = f.address1.value;
		f.baddress2.value = f.address2.value;
		f.bcity.value = f.city.value;
		f.bstate.options[f.state.selectedIndex].selected = true;
		f.bzipcode.value = f.zipcode.value;
		return;
	}
}
//-->
</script>
</head>
<body link="#666666" alink="#660000" vlink="#333333">
<table width="720" border="0" cellspacing="0" align="center" cellpadding="0" bgcolor="#FFFFFF">
  <tr> 
    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
	    <td width="100"><img src="images/blank.gif" width="1" height="55" border="0"></td>
	</tr>
	<?php 
		include("leftmenu.html");
	?>
	</table>
	</td>



    <td valign="top" width="450" align="left" style="padding-left=10px;"> 


<?php
	if ($errmsg != "" && $notfeepaid) {
		//duplicate application with fees not paid
		//Configuration File
		include_once('includes/config.inc.php'); 
	
		//Global Configuration File
		include_once('includes/global_config.inc.php');
?>
		<form method="post" name="payform" action="<?=$paypal[url]?>">
<?php 
		//show paypal hidden variables
		showVariables(); 
?> 
		</form>
		<script language="JavaScript">
		if (confirm("Your previously submitted application is pending as you have not paid the application fees. Click 'OK' to pay your application fees and complete your application or click 'Cancel' to submit a new application with a different email address")) {
			document.write("<br><br><center><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\" color=\"990033\">Loading Application Fee Processing Page . . . </font></center><br><br>");
			document.payform.submit();
		}
		</script>
<?php
		$email = "";
	} 
?>
<center />		        <img src="images/worldpeacesociety_logo.jpg"  border="0" alt="World Peace Society">
<br>
                        <img src="images/worldpeacesociety_banner.jpg"  alt="World Peace Society" border="0">
</center>
<br>
<br>

wps contributions
<br>
Any and all amounts are appreciated.
<br>
Services, facilities and products are also welcome.
<br>
We appreciate your support and cooperation.
<br>
Unfortunately funds are required for us to continue our work and efforts to carry out our mission.
<br>
Please enter the amount you are contributing below.
<br>
If you wish to contribute something other than money please <a href="mailto:all@worldpeacesociety.org">contact us.</a>
<br>
<br>

<table>
<tr>
                        <td width="100">
				<input type="radio" name="invitecode" value="Single" >$5
                        </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Family" >$10
	                 </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Organization" >$25
                       </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Silver" >$50
                       </td>
                        <td width="100">
				<input type="radio" name="invitecode" value="Gold" >Other $
                       </td>
</tr>
</table>

<br>
<br>
<br>


		<form name="appform" action="application.php" method="post" onSubmit="return validate(this);" enctype="multipart/form-data">
		<input type="hidden" name="action" value="add">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td align="left" width="150">Enter Amount: </td>
			<td align="left"><input type="text" name="membership" size="8" value="<?= $membership ?>"> $0.00 USD</td>
		</tr>
		<tr>
			<td align="left" width="150">First Name: </td>
			<td align="left"><input type="text" name="firstname" size="20" value="<?= $firstname ?>"></td>
		</tr>
		<tr>
			<td align="left">Last Name:</td>
			<td align="left"><input type="text" name="lastname" size="20" value="<?= $lastname ?>"></td>
		</tr>
		<tr>
			<td align="left">E-mail:</td>
			<td align="left"><input type="text" name="email" size="20" value="<?= $email ?>"></td>
		</tr>
		<tr>
			<td align="left">Phone:</td>
			<td align="left"><input type="text" name="phone" size="20" value="<?= $phone ?>"></td>
		</tr>
		<tr>
			<td align="left">Address:</td>
			<td align="left"><input type="text" name="address1" size="20" value="<?= $address1 ?>"></td>
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left"><input type="text" name="address2" size="20" value="<?= $address2 ?>"></td>
		</tr>
		<tr>
			<td align="left">City:</td>
			<td align="left"><input type="text" name="city" size="20" value="<?= $city ?>"></td>
		</tr>
		<tr>
			<td align="left">State:</td>
			<td colspan="2">
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
			<tr>
			    <td><select class="textbox" name="state">
					<option value="">State Name...</option>
					<option value="AA" <?= ($state == "AA") ? "selected" : "" ?>>AA - Armed Forces Americas</option>
					<option value="AE" <?= ($state == "AE") ? "selected" : "" ?>>AE - Armed Forces Europe</option>
					<option value="AL" <?= ($state == "AL") ? "selected" : "" ?>>Alabama</option>
					<option value="AK" <?= ($state == "AK") ? "selected" : "" ?>>Alaska</option>
					<option value="AB" <?= ($state == "AB") ? "selected" : "" ?>>Alberta</option>
					<option value="AS" <?= ($state == "AS") ? "selected" : "" ?>>American Samoa</option>
					<option value="AP" <?= ($state == "AP") ? "selected" : "" ?>>AP - Armed Forces Pacific</option>
					<option value="AZ" <?= ($state == "AZ") ? "selected" : "" ?>>Arizona</option>
					<option value="AR" <?= ($state == "AR") ? "selected" : "" ?>>Arkansas</option>
					<option value="BC" <?= ($state == "BC") ? "selected" : "" ?>>British Columbia</option>
					<option value="CA" <?= ($state == "CA") ? "selected" : "" ?>>California</option>
					<option value="CO" <?= ($state == "CO") ? "selected" : "" ?>>Colorado</option>
					<option value="CT" <?= ($state == "CT") ? "selected" : "" ?>>Connecticut</option>
					<option value="DE" <?= ($state == "DE") ? "selected" : "" ?>>Delaware</option>
					<option value="DC" <?= ($state == "DC") ? "selected" : "" ?>>District of Columbia</option>
					<option value="FL" <?= ($state == "FL") ? "selected" : "" ?>>Florida</option>
					<option value="GA" <?= ($state == "GA") ? "selected" : "" ?>>Georgia</option>
					<option value="GU" <?= ($state == "GU") ? "selected" : "" ?>>Guam</option>
					<option value="HI" <?= ($state == "HI") ? "selected" : "" ?>>Hawaii</option>
					<option value="ID" <?= ($state == "ID") ? "selected" : "" ?>>Idaho</option>
					<option value="IL" <?= ($state == "IL") ? "selected" : "" ?>>Illinois</option>
					<option value="IN" <?= ($state == "IN") ? "selected" : "" ?>>Indiana</option>
					<option value="IA" <?= ($state == "IA") ? "selected" : "" ?>>Iowa</option>
					<option value="KS" <?= ($state == "KS") ? "selected" : "" ?>>Kansas</option>
					<option value="KY" <?= ($state == "KY") ? "selected" : "" ?>>Kentucky</option>
					<option value="LA" <?= ($state == "LA") ? "selected" : "" ?>>Louisiana</option>
					<option value="ME" <?= ($state == "ME") ? "selected" : "" ?>>Maine</option>
					<option value="MB" <?= ($state == "MB") ? "selected" : "" ?>>Manitoba</option>
					<option value="MD" <?= ($state == "MD") ? "selected" : "" ?>>Maryland</option>
					<option value="MA" <?= ($state == "MA") ? "selected" : "" ?>>Massachusetts</option>
					<option value="MI" <?= ($state == "MI") ? "selected" : "" ?>>Michigan</option>
					<option value="MN" <?= ($state == "MN") ? "selected" : "" ?>>Minnesota</option>
					<option value="MS" <?= ($state == "MS") ? "selected" : "" ?>>Mississippi</option>
					<option value="MO" <?= ($state == "MO") ? "selected" : "" ?>>Missouri</option>
					<option value="MT" <?= ($state == "MT") ? "selected" : "" ?>>Montana</option>
					<option value="NE" <?= ($state == "NE") ? "selected" : "" ?>>Nebraska</option>
					<option value="NV" <?= ($state == "NV") ? "selected" : "" ?>>Nevada</option>
					<option value="NB" <?= ($state == "NB") ? "selected" : "" ?>>New Brunswick</option>
					<option value="NF" <?= ($state == "NF") ? "selected" : "" ?>>Newfoundland and Labrador</option>
					<option value="NH" <?= ($state == "NH") ? "selected" : "" ?>>New Hampshire</option>
					<option value="NJ" <?= ($state == "NJ") ? "selected" : "" ?>>New Jersey</option>
					<option value="NM" <?= ($state == "NM") ? "selected" : "" ?>>New Mexico</option>
					<option value="NY" <?= ($state == "NY") ? "selected" : "" ?>>New York</option>
					<option value="NC" <?= ($state == "NC") ? "selected" : "" ?>>North Carolina</option>
					<option value="ND" <?= ($state == "ND") ? "selected" : "" ?>>North Dakota</option>
					<option value="MP" <?= ($state == "MP") ? "selected" : "" ?>>Northern Mariana Islands</option>
					<option value="NT" <?= ($state == "NT") ? "selected" : "" ?>>Northwest Territories</option>
					<option value="NS" <?= ($state == "NS") ? "selected" : "" ?>>Nova Scotia</option>
					<option value="OH" <?= ($state == "OH") ? "selected" : "" ?>>Ohio</option>
					<option value="OK" <?= ($state == "OK") ? "selected" : "" ?>>Oklahoma</option>
					<option value="ON" <?= ($state == "ON") ? "selected" : "" ?>>Ontario</option>
					<option value="OR" <?= ($state == "OR") ? "selected" : "" ?>>Oregon</option>
					<option value="PA" <?= ($state == "PA") ? "selected" : "" ?>>Pennsylvania</option>
					<option value="PE" <?= ($state == "PE") ? "selected" : "" ?>>Prince Edward Island</option>
					<option value="PR" <?= ($state == "PR") ? "selected" : "" ?>>Puerto Rico</option>
					<option value="QC" <?= ($state == "QC") ? "selected" : "" ?>>Quebec</option>
					<option value="RI" <?= ($state == "RI") ? "selected" : "" ?>>Rhode Island</option>
					<option value="SK" <?= ($state == "SK") ? "selected" : "" ?>>Saskatchewan</option>
					<option value="SC" <?= ($state == "SC") ? "selected" : "" ?>>South Carolina</option>
					<option value="SD" <?= ($state == "SD") ? "selected" : "" ?>>South Dakota</option>
					<option value="TN" <?= ($state == "TN") ? "selected" : "" ?>>Tennessee</option>
					<option value="TX" <?= ($state == "TX") ? "selected" : "" ?>>Texas</option>
					<option value="TT" <?= ($state == "TT") ? "selected" : "" ?>>Trust Territory</option>
					<option value="UT" <?= ($state == "UT") ? "selected" : "" ?>>Utah</option>
					<option value="VT" <?= ($state == "VT") ? "selected" : "" ?>>Vermont</option>
					<option value="VA" <?= ($state == "VA") ? "selected" : "" ?>>Virginia</option>
					<option value="VI" <?= ($state == "VI") ? "selected" : "" ?>>Virgin Islands</option>
					<option value="WA" <?= ($state == "WA") ? "selected" : "" ?>>Washington</option>
					<option value="WV" <?= ($state == "WV") ? "selected" : "" ?>>West Virginia</option>
					<option value="WI" <?= ($state == "WI") ? "selected" : "" ?>>Wisconsin</option>
					<option value="WY" <?= ($state == "WY") ? "selected" : "" ?>>Wyoming</option>
					<option value="YT" <?= ($state == "YT") ? "selected" : "" ?>>Yukon</option>
				</select></td>
				<td>&nbsp;Zip:</td>
			    <td><input class="textbox" size="10" name="zipcode" value="<?= $zipcode ?>"></td>           
			</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td></td>
		    <td>
				<input type="radio" name="country" value="US" <?= ($country == "US" || $country == "") ? "checked" : "" ?>> US Resident<br>
				<input type="radio" name="country" value="OTHER" <?= ($country != "US" && $country != "") ? "checked" : "" ?>> Other&nbsp;
				<input type="text" name="country_other" value="" size="20"> 
			</td>
		    
		</tr>
		<tr>
			<td colspan="2" height="10">&nbsp;</td>
		</tr>
		<tr>
			<td align="left" colspan="2"><br><b>Message</b>&nbsp;<i>(Optional)</i></td>
		</tr>
		<tr>
			<td align="left" colspan="2"><textarea name="essay1" rows="5" cols="60"><?= $essay1 ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" height="10">&nbsp;</td>
		</tr>

		<tr>
			<td align="left" colspan="2"><br><input type="submit" name="submit" value="Send"><br><br><br></td>
		</tr>

<?php 
	if ($errmsg == "") {
	//Google page view code for new applications
?>	
		<tr>
			<td align="right" colspan="2">
			<!-- Google Code for PageView Conversion Page -->
<script language="JavaScript" type="text/javascript">
<!--
var google_conversion_id = 1069889824;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "666666";
if (1) {
  var google_conversion_value = 1;
}
var google_conversion_label = "PageView";
//-->
</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<img height=1 width=1 border=0 src="http://www.googleadservices.com/pagead/conversion/1069889824/?value=1&label=PageView&script=0">
</noscript>
			</td>
		</tr>
<?php 
	}
?>
	</table>
	</td>
</tr>
</table>
</form>
<p align="center">
<span class="footer">
<a href="mailto: all@worldpeacesociety.org"> Contact Us</a>
<br>
&copy; World Peace Society and Growth Network, All Rights Reserved.</span>
</p>
<?php 
	//alert error message if any
	if ($errmsg != "") {
		if (! $notfeepaid) {
?>
<script language="Javascript">
<!--
	alert("<?= $errmsg ?>");
//-->
</script>
<?php
		} 
	}
?>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-369695-1";
urchinTracker();
</script>
</body>
</html>
<?php
} 
?>



