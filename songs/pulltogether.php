<?php
$submitted = 0;

$poem = array();
array_push($poem, "PULL TOGETHER"); 
array_push($poem, "Lyrics by David Levene");
array_push($poem, "Music by JohnBowen"); 
array_push($poem, "");
array_push($poem, "Seekers of change"); 

array_push($poem, "Help us arrange"); 

array_push($poem, "A better country"); 

array_push($poem, "For you and me."); 
array_push($poem, "");
array_push($poem, "In a better world"); 

array_push($poem, "Where all are free,"); 

array_push($poem, "If we care"); 

array_push($poem, "The chance is there."); 
array_push($poem, "");
array_push($poem, "Opportunities beckon"); 

array_push($poem, "And will grow  When we go"); 

array_push($poem, "In the right direction."); 
array_push($poem, "");
array_push($poem, "Pull together ** "); 

array_push($poem, "To go far"); 

array_push($poem, "Act together"); 

array_push($poem, "To reach our star"); 

array_push($poem, "Build together"); 

array_push($poem, "To make the world better."); 
array_push($poem, "");
array_push($poem, "Let us use our zeal"); 

array_push($poem, "For progress that is real"); 

array_push($poem, "Working for good pay"); 

array_push($poem, "Can be everyone's way."); 
array_push($poem, "");
array_push($poem, "Able to satisfy"); 

array_push($poem, "All who apply"); 

array_push($poem, "If we endeavor"); 

array_push($poem, "To work together."); 

array_push($poem, "Opportunities for all"); 

array_push($poem, "Can be better than ever."); 
array_push($poem, "");
array_push($poem, "Join together"); 

array_push($poem, "To make the world better"); 

array_push($poem, "Pull together"); 

array_push($poem, "To make life more rewarding than ever."); 
array_push($poem, "");
array_push($poem, "REPEAT from**"); 
array_push($poem, "");
array_push($poem, "Copyright 2006 Growth Network"); 
array_push($poem, "");
array_push($poem, "");
array_push($poem, "You can review other songs, poems and much more by visiting: ");
array_push($poem, "http://www.WorldPeaceSociety.org"); 

if ($_REQUEST['action'] == "send") {
     $fname = trim($_REQUEST["fname"]);
     $lname = trim($_REQUEST["lname"]);
     $message = trim($_REQUEST["message"]);
     $fromemail = strtolower(trim($_REQUEST["fromemail"]));
     $toemail = strtolower(trim($_REQUEST["toemail"]));
     
     $body = join("¥n", $poem);
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
<div style="color: #990033;"><b>Thank you for sending song. Send another one.</b></div>
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
<font color="990033"><b>Send this song to a friend or contact.</b></font>
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
          <td><input type="submit" value="Send Song" name="rAction"></td>
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
include("songs_selection.html");
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