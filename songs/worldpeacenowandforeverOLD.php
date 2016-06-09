<?php
$submitted = 0;

$poem = array();
array_push($poem, "WAR NO MORE   (followed by the song: World Peace Now & Forever)"); 
array_push($poem, "by"); 
array_push($poem, "David Levene"); 
array_push($poem, "");
array_push($poem, "War No More"); 
array_push($poem, "That is what we are about."); 
array_push($poem, "'War No More!'"); 
array_push($poem, "We want all to shout."); 
array_push($poem, "Why should war between nations be"); 
array_push($poem, "When there is such a simple solution"); 
array_push($poem, "For all to see."); 
array_push($poem, "");
array_push($poem, "War No More"); 
array_push($poem, "Just not necessary anymore."); 
array_push($poem, "More Defense - Less Expense"); 
array_push($poem, "For each nation"); 
array_push($poem, "This is what can show."); 
array_push($poem, "Such a simple plan"); 
array_push($poem, "For all to know."); 
array_push($poem, "");
array_push($poem, "What is better?"); 
array_push($poem, "If it is known"); 
array_push($poem, "Then let it be shown."); 
array_push($poem, "Why not let this plan be"); 
array_push($poem, "The foundation of a better world"); 
array_push($poem, "Where all are free."); 
array_push($poem, "");
array_push($poem, "And while we promote"); 
array_push($poem, "What is on our shelf,"); 
array_push($poem, "Not only enrich the whole world"); 
array_push($poem, "But improve life for yourself."); 
array_push($poem, "");
array_push($poem, "copyright 2006 Growth Network. All rights reserved."); 
array_push($poem, "");
array_push($poem, "");
array_push($poem, "");
array_push($poem, "WORLD PEACE NOW AND FOREVER"); 
array_push($poem, "Words by David Levene");
array_push($poem, "Music by Margarita Nueller"); 
array_push($poem, "Coordinated by Rosina Albano-Zinco"); 
array_push($poem, "Sung by Michelle McFadden"); 
array_push($poem, "");
array_push($poem, "World Peace Now and Forever"); 
array_push($poem, "Allows opportunity for better endeavor,"); 
array_push($poem, "World Peace Now and Forever"); 
array_push($poem, "Brings all people closer together."); 
array_push($poem, "");
array_push($poem, "Armies and navies acting as one"); 
array_push($poem, "Each country's defense and independence guaranteed,"); 
array_push($poem, "Security and freedom never before achieved"); 
array_push($poem, "Bring peace and well being greater than believed."); 
array_push($poem, "");
array_push($poem, "World Peace Now and Forever"); 
array_push($poem, "Allows opportunity for better endeavor,"); 
array_push($poem, "World Peace Now and Forever"); 
array_push($poem, "Brings all people closer together."); 
array_push($poem, "");
array_push($poem, "Swords locked in unison"); 
array_push($poem, "Point to a new vision,"); 
array_push($poem, "Bind the world to a new law"); 
array_push($poem, "Where war between nations is no more."); 
array_push($poem, "");
array_push($poem, "One for all and all for one"); 
array_push($poem, "Mean world peace has finally been won,"); 
array_push($poem, "Oh, to see what can be"); 
array_push($poem, "A safer brighter world for you and me."); 
array_push($poem, "");
array_push($poem, "World Peace Now and Forever"); 
array_push($poem, "Allows opportunity for better endeavor,"); 
array_push($poem, "World Peace Now and Forever"); 
array_push($poem, "Brings all people closer together."); 
array_push($poem, "");
array_push($poem, "For those who oppose and cry loud - No's,"); 
array_push($poem, "Tell us what is better"); 
array_push($poem, "Nuclear bombs that can shower"); 
array_push($poem, "Or peace that will bloom and flower?"); 
array_push($poem, "");
array_push($poem, "For those who feel this plan"); 
array_push($poem, "Does not fill the bill,"); 
array_push($poem, "Let them show us"); 
array_push($poem, "A better one that will."); 
array_push($poem, "");
array_push($poem, "And let us all ask - why not?"); 
array_push($poem, "Why not war no more,"); 
array_push($poem, "Why not let peace be law,"); 
array_push($poem, "Why not let war no more be better"); 
array_push($poem, "And have World Peace Now and Forever!"); 
array_push($poem, "");
array_push($poem, "copyright 1993 Growth Network. All rights reserved."); 
array_push($poem, "");
array_push($poem, "");

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
To hear this song and poem <a href="http://www.WorldPeaceSociety.org/songs/worldpeace.mp3" target="__"><b> CLICK HERE</b></a><br><br></td>
<font size="3"><font color="000000">
<?= join("<br/>", $poem) ?>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
You can review other songs, poems and much more by visiting: <u>www.WorldPeaceSociety.org</u>
<br>
To hear this song and poem <a href="http://www.worldpeacesociety.org/songs/worldpeace.mp3"><font size="3"><b>CLICK HERE! </b></font></a>
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
      <td width="801" valign="top" class="ct">
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

    <td width="100" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
	<?php 
		include("../bottommenu2.html");
	?>
	</table>
	</td>

<font size="1">
&copy; 1988-2006 World Peace Society and Growth Network. All rights reserved.</font></span>
</p>
</body>
</html>
