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
	<?php 
		include("leftmenu.html");
	?>
	</table>
	</td>



    <td valign="top" width="450" align="left" style="padding-left=10px;"> 


<center />		        <img src="images/worldpeacesociety_logo.jpg"  border="0" alt="World Peace Society">
<br>
                        <img src="images/worldpeacesociety_banner.jpg"  alt="World Peace Society" border="0">
</center>
<br>
<br>

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


		<form name="appform" action="application.php" method="post" onSubmit="return validate(this);" enctype="multipart/form-data">
		<input type="hidden" name="action" value="add">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td align="left" width="150">Enter Amount: </td>
			<td align="left"><input type="text" name="membership" size="8" value=""> $0.00 USD</td>
		</tr>
		<tr>
			<td align="left" width="150">First Name: </td>
			<td align="left"><input type="text" name="firstname" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Last Name:</td>
			<td align="left"><input type="text" name="lastname" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">E-mail:</td>
			<td align="left"><input type="text" name="email" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Phone:</td>
			<td align="left"><input type="text" name="phone" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left">Address:</td>
			<td align="left"><input type="text" name="address1" size="20" value=""></td>
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left"><input type="text" name="address2" size="20" value=""></td>
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
				</select></td>
				<td>&nbsp;Zip:</td>
			    <td><input class="textbox" size="10" name="zipcode" value=""></td>           
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
			<td align="left" colspan="2"><br><b>Message</b>&nbsp;<i>(Optional)</i></td>
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

		<tr>
			<td align="left" colspan="2"> 

<br>
<br>
<br>
<a href="contactus.php"> <font size="3"><b>Next</b></a>
</td>
		</tr>
	
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
	</table>
	</td>
</tr>
</table>
</form>
<p align="center">

    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<?php 
		include("bottommenu.html");
	?>
	</table>
	</td>

<span class="footer">
<br>
&copy; World Peace Society and Growth Network, All Rights Reserved.</span>
</p>
</body>
</html>



