<?php
$submitted = 0;

$poem = array();
array_push($poem, "INDEPENDENCE AND DEMOCRACY");
array_push($poem, "by");
array_push($poem, "David Levene");
array_push($poem, "");
array_push($poem, "");array_push($poem, "Independence, Freedom, Democracy!");
array_push($poem, "Desires so old and strong");
array_push($poem, "They appear to be born in our soul."); 
array_push($poem, "Why then, time and again,"); 
array_push($poem, "Have leaders tried to thwart this goal?"); 
array_push($poem, "");
array_push($poem, "Why, so often, have freedom and choice"); 
array_push($poem, "Remained the weaker voice?"); 
array_push($poem, "Why, over so many,"); 
array_push($poem, "Can only a few hold power"); 
array_push($poem, "And make it so difficult"); 
array_push($poem, "For freedom to flower."); 
array_push($poem, "");
array_push($poem, "What allows tyranny, which everyone so dreads, to survive"); 
array_push($poem, "And prevents democracy, which all desire, to thrive?"); 
array_push($poem, "We must solve this problem"); 
array_push($poem, "That keeps some countries so bleak"); 
array_push($poem, "And unable to provide"); 
array_push($poem, "What most of their citizens seek."); 
array_push($poem, "");
array_push($poem, "We must oppose oppression throughout the globe"); 
array_push($poem, "Beyond each country and within"); 
array_push($poem, "We must struggle to make freedom win."); 
array_push($poem, "As Martin Luther King, Jr. so aptly said,"); 
array_push($poem, "Injustice anywhere"); 
array_push($poem, "Is a threat to justice everywhere.");
array_push($poem, "");
array_push($poem, "Let us be sure to explore"); 
array_push($poem, "All that can be done"); 
array_push($poem, "To make this world"); 
array_push($poem, "A freer and more beautiful one."); 
array_push($poem, "");
array_push($poem, "Oppression is maintained by exerting power"); 
array_push($poem, "through authority, force, and deprivation"); 
array_push($poem, "By spreading fear and creating isolation."); 
array_push($poem, "");
array_push($poem, "Ignorance makes new ideas difficult to know"); 
array_push($poem, "Inertia makes old ways reluctant to go,"); 
array_push($poem, "And new ways slow to grow. ");
array_push($poem, "");
array_push($poem, "But conditions can be changed"); 
array_push($poem, "New directions can be arranged"); 
array_push($poem, "When better alternatives are pervceived"); 
array_push($poem, "Possibilities for hope and improvement are believed."); 
array_push($poem, "");
array_push($poem, "As often shown"); 
array_push($poem, "Most people choose the better way"); 
array_push($poem, "Once it is known."); 
array_push($poem, "The oppressed also have the odds on their side"); 
array_push($poem, "Because the human race is naturally endowed"); 
array_push($poem, "With a full measure of dignity and pride."); 
array_push($poem, "");
array_push($poem, "Now there is more hope than ever"); 
array_push($poem, "That independence and democracy will prevail"); 
array_push($poem, "And tyranny will ultimately fail. ");
array_push($poem, "The world has become too small"); 
array_push($poem, "Freedom and hope can be seen by all."); 
array_push($poem, "");
array_push($poem, "With television and travel so wide"); 
array_push($poem, "Oppression and despotism have no place to hide."); 
array_push($poem, "People will just no longer follow"); 
array_push($poem, "When they see there is a better way to be"); 
array_push($poem, "They will ask, if it is good for the other fellow"); 
array_push($poem, "Then why not also for me?"); 
array_push($poem, "");
array_push($poem, "The world has become too small ");
array_push($poem, "Those who lead must provide more - or fall."); 
array_push($poem, "So let this message impact all"); 
array_push($poem, "Those who are now the leaders of me"); 
array_push($poem, "And those who want the chance to be."); 
array_push($poem, "");
array_push($poem, "Let us hereby vow"); 
array_push($poem, "Only one kind of world will suffice"); 
array_push($poem, "Only one ideal makes past suffering worth the price."); 
array_push($poem, "And what may that world be?"); 
array_push($poem, "The only one I will be satisfied to see"); 
array_push($poem, "A world where each and every human being"); 
array_push($poem, "Has liberty and a full chance"); 
array_push($poem, "For Peace, Progress and Prosperity."); 
array_push($poem, "");
array_push($poem, "&copy; 2002 Growth Network. All rights reserved.");
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
<div style="color: #990033;"><b>Thank you for sending poem. Send another one./<b></div>
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