<?php
	$id = $_REQUEST['invoice'];
	if (preg_match("/app_(\d+)/", $id, $matches)) {
		$id = $matches[1];
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
<table width="720" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="3" align="center" height="115"> 
      <table width="720" border="0" cellspacing="0" cellpadding="0" height="115">

		<tr> 
			<td align="left" width="260" height="74">
		        <img src="images/worldpeacesocietyc_log.jpg"  border="0" alt="World Peace Society">
			</td>
		</tr> 
        <tr> 
          <td width="600" align="right" height="55" valign="top"><img src="images/worldpeacesocietyc_banner.jpg"  alt="World Peace Society" border="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="260" valign="top" align="center">
	<table width="100%" border="0" cellpsacing="0" cellpadding="0">
	<tr>
		<td><img src="/images/blank.gif" height="10" border="0"></td>
	</tr>
	<tr>
		<td><img src="miranda/images/miranda_1.jpg"  alt="Miss New York City"   border="0"></td>
	</tr>
	<tr>
		<td><img src="/images/blank.gif" height="80" border="0"></td>
	</tr>
	</table>
    </td>
	<td width="10"><img src="/images/blank.gif" width="10" border="0"></td>
    <td valign="top" width="510" align="left" style="padding-left=10px;"> 
	<br>
		<center><h2>World Peace Society<sup style="font-size: 8px;">&reg;</sup> </h2></center>
		<br><br>
		Congratulations, you've just joined World Peace Society<sup style="font-size: 8px;">&reg;</sup> <br>Your membership number is <b><?= $id ?></b>.<br><br>
		If you have any questions send an e-mail to <a href="mailto:all@worldpeacesociety.org">all@worldpeacesociety.org</a>. <br>Thank you for being part of us.
<br>
<br>
<span style="font-size: 14px;"><b>Peace!!!</b></span>
	</td>
  </tr>
</table>
<p align="center">
<span class="footer">
<a href="mailto: all@worldpeacesociety.org"> Contact Us</a>
<br>
&copy; World Peace Society and Growth Network, All Rights Reserved.</span>
</p>
</body>
</html>