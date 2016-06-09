<?php
$submitted = 0;

$poem = array();
array_push($poem, "ESSENCE OF HUMANITY CREDO");
array_push($poem, "");
array_push($poem, "The song, An Outstanding Me, expresses and defines 10 essential values that should guide the behavior of every human being, business, organization, and government on this planet. We call this philosophy the Essence Of Humanity Credo, and heres why."); 
array_push($poem, "");
array_push($poem, "Observe, that in the entire history of the human race, no one who was firmly committed to the first five values  to be honest, decent, tolerant, progressive, and friendly  could have willfully committed any serious crime or inhumanity."); 
array_push($poem, "");
array_push($poem, "In the entire history of the human race, not one tiny advance of civilization could have occurred unless some human being somewhere practiced at least one of the second five values  to be intelligent, talented, creative, accomplished, and attractive."); 
array_push($poem, "");
array_push($poem, "By seeking and embracing these ten qualities, we believe one makes the most of being human. It is in tune with nature and reveals that all gain the opportunity to be outstanding when they take responsibility to make these precepts their own."); 
array_push($poem, "");
array_push($poem, "Though these ten traits have been respected for thousands of years and are familiar to most, they are still too often missing in too many. Also the perspective that all can best advance their own self-interest by following these values is often absent."); 
array_push($poem, "");
array_push($poem, "We believe this Credo can help attain maximum self-fulfillment for each and create a more rewarding world for all. We believe it also can be taught, especially to our young. We think most will agree that the more who practice this Credo, the better the world will be for all."); 
array_push($poem, "");
array_push($poem, "The above philosophy was written by David Levevne");
array_push($poem, "© 2006 Growth Network"); 
array_push($poem, "");
array_push($poem, "");
array_push($poem, "You can review other poems, songs and much more by visiting: ");
array_push($poem, "http://www.WorldPeaceSociety.org"); 

if ($_REQUEST['action'] == "send") {
     $fname = trim($_REQUEST["fname"]);
     $lname = trim($_REQUEST["lname"]);
     $message = trim($_REQUEST["message"]);
     $fromemail = strtolower(trim($_REQUEST["fromemail"]));
     $toemail = strtolower(trim($_REQUEST["toemail"]));
     
     $body = join("\n", $poem);
     mail($toemail, "Thought this might interest you", $body, "From: ".$fromemail . "\r\nBcc: worldpeace.society@verizon.net\r\n"); 
     $submitted = 1;
}
?>
<html>
<head>
<title>World Peace Society</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="keywords" content="World Peace Society">
<link href="../css/styles.css" rel="stylesheet" type="text/css">

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
		include("../leftmenu2.html");
	?>
	</table>
	</td>
    <td width="30"><img src="../images/blank.gif" width="10" border="0"></td>
    <td width="720" valign="top" align="left">
<?php
if ($submitted) {
?>
<div style="color: #990033;"><b>Thank you for sending poem. Send another one.</b></div>
<?php
}
?>
	<table width="100%" border="0" cellpsacing="0" cellpadding="0">
	<tr>


<img src="../images/blank.gif" height="1" width="200" border="0">
<img src="../images/worldpeacesociety_logo.jpg" alt="World Peace Society" border="0">
<br>
<img src="../images/worldpeacesociety_banner500.jpg" alt="World Peace Society" border="0">
<br>
<br>
<font size="3"><font color="000000">
<?= join("<br/>", $poem) ?>

<br>
<br>
<br>
<br>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="990033"><b>Send this poem to a friend or contact.</b></font>
<form METHOD="POST" ACTION="">
  <input type="hidden" name="action" value="send">
  <table border="0" cellpadding="0" cellspacing="0" width="750">
    <tr>
      <td width="15"></td>
      <td width="601" valign="top" class="ct">
<div align="center"><center>
      </center></div>
<table border="0" cellpadding="2" cellspacing="0" width="100%" class="ct">
        <tr>
          <td><img src="images/blank.gif" width="1" height="20"></td>
          <td><img src="images/blank.gif" width="160" height="1"></td>
          <td><img src="images/blank.gif" width="10" height="1"></td>
          <td><img src="images/blank.gif" width="400" height="1"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><table border="0" cellpadding="6" cellspacing="0" width="100%" class="ct">
            <tr>
              <td class="ctSmall"><font color="990033">*required</font></td>
            </tr>
          </table>
          </td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top">Message</td>
          <td></td>
          <td><input type="text" name="Subject" size="28" value="Thought this would interest you."></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top">Your First Name</td>
          <td></td>
          <td><input type="text" name="fname" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top">Your Last Name</td>
          <td></td>
          <td><input type="text" name="lname" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"><font color="990033">*</font>Your Email</td>
          <td></td>
          <td><input type="text" name="fromemail" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"><font color="990033">*</font>Your Contact's Email</td>
          <td></td>
          <td><input type="text" name="toemail" size="35"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"></td>
          <td></td>
          <td><input type="submit" value="Send Poem" name="rAction"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>It will take a moment. Please click the button only once.</td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3"><table cellspacing="0" cellpadding="0" border="1" width="100%" class="ctSmall">
          </table>
          </td>
        </tr>
      </table>
      <div align="center"><center><table border="1" cellpadding="8" cellspacing="0" width="96%">
      </table>
      </center></div></td>
      <td width="9"></td>
    </tr>
    <tr>
      <td width="15" height="15"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</form>
<?php
include("poems_selection.html");
?>
	</tr>
	</table>
	</td>
	<td width="10"><img src="../images/blank.gif" width="10" border="0"></td>
    <td valign="top" width="450" align="left"> 
      <p><br>
   </td>
  </tr>
</table>
<p align="center">
<span class="footer">


	<?php 
		include("../bottommenu2.html");
	?>

<center>
<br>
<font size="1">
&copy; 1988-2006 World Peace Society and Growth Network. All rights reserved.</font></span>
</center>
</p>
</body>
</html>