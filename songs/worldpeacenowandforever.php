<?php
$submitted = 0;

$poem = array();
array_push($poem, "WAR NO MORE (followed by the song: World Peace Now And Forever)");
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
array_push($poem, "Copyright &#169; 2006 Growth Network. All rights reserved.");
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
array_push($poem, "Copyright &#169; 1993 Growth Network. All rights reserved.");
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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en-US">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="imagetoolbar" content="no">
<title>World Peace Society Songs - World Peace Now And Forever</title>
<meta name="AUTHOR" content="Webmaster">
<meta name="CATEGORY" content="document">
<meta name="COPYRIGHT" content="Copyright &#169; 2006-2011 World Peace Society and Growth Network. All rights reserved.">
<meta name="DESCRIPTION" content="The mission of the World Peace Society is to make the world better, more just, more peaceful, better educated, less drug abuse, less crime, and more prosperous for all.">
<meta name="DISTRIBUTION" content="global">
<meta name="KEYWORDS" content="peace, world peace, World Peace Society, songs, David Levene, Growth Network">
<meta name="OBJECTTYPE" content="Document">
<meta name="RATING" content="General">
<meta name="RESOURCE-TYPE" content="document">
<meta name="ROBOTS" content="index, follow">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="DC.language" content="en-US">
<meta name="DC.title" content="World Peace Society Songs - World Peace Now And Forever">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/styles.css" type="text/css" media="all" title="Default">
<script src="audio-player.js" type="text/javascript"></script>
</head>
<body link="#666666" alink="#660000" vlink="#333333" style="max-width: 970px;">
<table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="720">
  <tr>
    <td valign="top" width="100">
	<table align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
	    <td width="100"><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="1" height="85"></td>
	</tr>
	<?php
		include("../leftmenu2.html");
	?>
	</table>
	</td>
    <td width="30"><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="10" height="10"></td>
    <td align="left" valign="top" width="720">
<?php
if ($submitted) {
?>
<div style="color: #990033;"><strong>Thank you for sending song. Send another one.</strong></div>
<?php
}
?>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr><td>
<img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="200" height="1">
<img src="/images/worldpeacesociety_logo.jpg" alt="World Peace Society logo" title="World Peace Society logo" border="0" hspace="0" vspace="0" width="150" height="146">
<br>
<img src="/images/worldpeacesociety_banner500.jpg" alt="World Peace Society(r)" title="World Peace Society(r)" border="0" hspace="0" vspace="0" width="500" height="63">
<br>
<br><font color="#000000" size="3"><strong>
To instantly hear this song, click the Play button:&nbsp;&nbsp; <script src="World_Peace_Now_And_Forever.js" type="text/javascript"></script><br><br>
To download this song, right-click and "Save As...":&nbsp; <a href="World_Peace_Now_And_Forever.mp3" title="Right-click and 'Save As...' to download">World_Peace_Now_And_Forever.mp3</a><br><br>
[ Running Time: 4 minutes 34 seconds&nbsp; &#8212; &nbsp;File Size: 6,581,202 bytes ]<br><br></strong></font>
<font size="3"><font color="#000000">
<?= join("<br>", $poem) ?>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
You can review other songs, poems and much more by visiting: <u>www.WorldPeaceSociety.org</u>
<br><br>
<font color="#000000" size="3"><strong>
To instantly hear this song, click the Play button:&nbsp;&nbsp; <script src="World_Peace_Now_And_Forever.js" type="text/javascript"></script><br><br>
To download this song, right-click and "Save As...":&nbsp; <a href="World_Peace_Now_And_Forever.mp3" title="Right-click and 'Save As...' to download">World_Peace_Now_And_Forever.mp3</a><br><br>
[ Running Time: 4 minutes 34 seconds&nbsp; &#8212; &nbsp;File Size: 6,581,202 bytes ]<br><br></strong></font>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="#990033"><strong>Send this song to a friend or contact.</strong></font></font></font>
<form ACTION="" METHOD="POST">
  <input type="hidden" name="action" value="send">
  <table border="0" cellpadding="0" cellspacing="0" width="750">
    <tr>
      <td width="15"></td>
      <td valign="top" width="801">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
        <tr>
          <td><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="1" height="20"></td>
          <td><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="160" height="1"></td>
          <td><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="10" height="1"></td>
          <td><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="400" height="1"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><table border="0" cellpadding="6" cellspacing="0" width="100%">
            <tr>
              <td><font color="#990033">*required</font></td>
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
          <td align="right" valign="top"><font color="#990033">*</font>Your E-mail</td>
          <td></td>
          <td><input type="text" name="fromemail" size="35" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td align="right" valign="top"><font color="#990033">*</font>Your Contact's E-mail</td>
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
          <td colspan="3"><table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr><td width="9"></td>
    </tr>
    <tr>
      <td width="15" height="15"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table></table></table>
</form>
<?php
include("songs_selection.html");
?>
<br><br>
	</tr>
	</table>
	<td width="10"><img src="/images/blank.gif" alt="" border="0" hspace="0" vspace="0" width="10" height="10"></td>
    <td align="left" valign="top" width="450">
      <p><br>
   </td>
  </tr>
</table>
<p align="center">
<span class="footer">
<?php
include("../bottommenu2.html");
?>
</span>
<br><br>
<span class="footer"><font size="1">Copyright &#169; 1988-2011 World Peace Society and Growth Network. All rights reserved.</font></span></p>
<p align="center"><a href="http://validator.w3.org/check?uri=referer&amp;verbose=1" title="Click to validate the Hyper Text Markup Language."><img src="/images/html401.png" alt="Valid HTML 4.01" border="0" hspace="0" vspace="0" width="80" height="15"></a><img src="/images/1by1.gif" alt="" border="0" hspace="0" vspace="0" width="25" height="15"><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.worldpeacesociety.org/songs/worldpeacenowandforever.php&amp;warning=2&amp;profile=css21&amp;usermedium=all" title="Click to validate the Cascading Style Sheets."><img src="/images/css21.png" alt="Valid CSS 2.1" border="0" hspace="0" vspace="0" width="80" height="15"></a></p>
</body>
</html>
