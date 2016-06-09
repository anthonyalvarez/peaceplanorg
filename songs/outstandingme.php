<?php
$submitted = 0;

$poem = array();
array_push($poem, "ESSENCE OF HUMANITY CREDO&#8482; (followed by the song: An Outstanding Me)");
array_push($poem, "");
array_push($poem, "The song, An Outstanding Me, expresses and defines 10 essential values that should guide the behavior of every human being, business, organization, and government on this planet. We call this philosophy the Essence Of Humanity Credo, and here's why.");
array_push($poem, "");
array_push($poem, "Observe, that in the entire history of the human race, no one who was firmly committed to the first five values - to be honest, decent, tolerant, progressive, and friendly - could have willfully committed any serious crime or inhumanity.");
array_push($poem, "");
array_push($poem, "In the entire history of the human race, not one tiny advance of civilization could have occurred unless some human being somewhere practiced at least one of the second five values - to be intelligent, talented, creative, accomplished, and attractive.");
array_push($poem, "");
array_push($poem, "By seeking and embracing these ten qualities, we believe one makes the most of being human. It is in tune with nature and reveals that all gain the opportunity to be outstanding when they take responsibility to make these precepts their own.");
array_push($poem, "");
array_push($poem, "Though these ten traits have been respected for thousands of years and are familiar to most, they are still too often missing in too many. Also the perspective that all can best advance their own self-interest by following these values is often absent.");
array_push($poem, "");
array_push($poem, "We believe this Credo can help attain maximum self-fulfillment for each and create a more rewarding world for all. We believe it also can be taught, especially to our young. We think most will agree that the more who practice this Credo, the better the world will be for all.");
array_push($poem, "");
array_push($poem, "Following are the lyrics of An Outstanding Me. Note that the ten traits are arranged in the order one has most control over acquiring them.");
array_push($poem, "");
array_push($poem, "The above philosophy was written by David Levene");
array_push($poem, "Copyright &#169; 2006 Growth Network. All rights reserved.");
array_push($poem, "");
array_push($poem, "");
array_push($poem, "");
array_push($poem, "AN OUTSTANDING ME");
array_push($poem, "Lyrics by David Levene");
array_push($poem, "Music by Mieszko Gorski");
array_push($poem, "Sung by Michelle McFadden");
array_push($poem, "");
array_push($poem, "How do I be an outstanding me");
array_push($poem, "Strive to come fully alive");
array_push($poem, "Reach my full potentiality");
array_push($poem, "To gain peace, progress and prosperity.");
array_push($poem, "");
array_push($poem, "This is what I must be:");
array_push($poem, "");
array_push($poem, "HONEST - seek truth and honor in all I think and do.");
array_push($poem, "");
array_push($poem, "DECENT - respect the rights and interests of others too, with kindness and generosity showing through.");
array_push($poem, "");
array_push($poem, "TOLERANT - give different opinions and origins their chance.");
array_push($poem, "");
array_push($poem, "PROGRESSIVE - favor and advance constructive change.");
array_push($poem, "");
array_push($poem, "FRIENDLY - like, enjoy, and appreciate people of a wide range.");
array_push($poem, "");
array_push($poem, "INTELLIGENT - seek knowledge with an open mind, think smart and apply what I know and find.");
array_push($poem, "");
array_push($poem, "TALENTED - let my natural abilities get full respect, and direct what I perfect.");
array_push($poem, "");
array_push($poem, "CREATIVE - go beyond what has been set.");
array_push($poem, "");
array_push($poem, "If I am ACCOMPLISHED, much gets done.");
array_push($poem, "");
array_push($poem, "By making attributes appealing, ATTRACTIVE can be for everyone.");
array_push($poem, "");
array_push($poem, "That's how to be an outstanding me");
array_push($poem, "Strive to bring these traits alive");
array_push($poem, "Reach my full potentiality");
array_push($poem, "To gain peace, progress, and prosperity.");
array_push($poem, "");
array_push($poem, "If I strive to bring these traits alive");
array_push($poem, "I can be an outstanding me.");
array_push($poem, "I can be an outstanding me");
array_push($poem, "And shape a more rewarding world for all to see.");
array_push($poem, "");
array_push($poem, "Surely, then, the richer my life will be.");
array_push($poem, "Yes - the richer my life will be");
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
<title>World Peace Society Songs - An Outstanding Me</title>
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
<meta name="DC.title" content="World Peace Society Songs - An Outstanding Me">
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
To instantly hear this song, click the Play button:&nbsp;&nbsp; <script src="An_Outstanding_Me.js" type="text/javascript"></script><br><br>
To download this song, right-click and "Save As...":&nbsp; <a href="An_Outstanding_Me.mp3" title="Right-click and 'Save As...' to download">An_Outstanding_Me.mp3</a><br><br>
[ Running Time: 6 minutes 12 seconds&nbsp; &#8212; &nbsp;File Size: 8,932,849 bytes ]<br><br></strong></font>
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
To instantly hear this song, click the Play button:&nbsp;&nbsp; <script src="An_Outstanding_Me.js" type="text/javascript"></script><br><br>
To download this song, right-click and "Save As...":&nbsp; <a href="An_Outstanding_Me.mp3" title="Right-click and 'Save As...' to download">An_Outstanding_Me.mp3</a><br><br>
[ Running Time: 6 minutes 12 seconds&nbsp; &#8212; &nbsp;File Size: 8,932,849 bytes ]<br><br></strong></font>
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
