<?php
$submitted = 0;

$poem = array();
array_push($poem, "WAY TO PEACE");
array_push($poem, "by");
array_push($poem, "David Levene");
array_push($poem, "");
array_push($poem, "PLAN FOR PEACE");
array_push($poem, "SHOUT FOR PEACE");
array_push($poem, "DEMAND PEACE");
array_push($poem, "");
array_push($poem, "SIGN THE PETITION FOR PEACE");
array_push($poem, "");
array_push($poem, "The world wants peace.  It needs peace.  Everyone should demand peace.");
array_push($poem, "");
array_push($poem, "THE WORLD HAS TO MAKE WAR IMPOSSIBLE TO PURSUE");
array_push($poem, "and");
array_push($poem, "YOU CAN DO SOMETHING ABOUT IT.");
array_push($poem, "");
array_push($poem, "Almost every human being and each organization can afford to give at least
one dollar to this cause.");
array_push($poem, "Many can give much more.");
array_push($poem, "");
array_push($poem, "If all would contribute what they can, not only could we have enough funds
to carry on our work long after the founder leaves this earth, but we
would impress upon our leaders and representatives throughout the world
that they must take action now.");
array_push($poem, "");
array_push($poem, "Reviewing our web site WayToPeace.org and WorldPeaceSociety.org
will show that we are unique in bringing a specific plan to the attention
of the world.  We are showing a course that can be easily implemented by
all countries, cost less than we are now spending, and believe will be
quite effective.  But if someone has a more realistic and better plan let
them come forward with it.");
array_push($poem, "");
array_push($poem, "The founder and managing director is 80 years old and implores each to do
their part and help.");
array_push($poem, "");
array_push($poem, "EVERYONE SHOULD SIGN THE PETITION FOR  PEACE - IT INVOLVES NO COST.");
array_push($poem, "");
array_push($poem, "Its display to the world will show that most people want peace.");
array_push($poem, "");
array_push($poem, "Then, if you can, send us a contribution of one dollar or more.");
array_push($poem, "Also send our poems, songs, or petition to a friend or contact.");
array_push($poem, "It costs nothing.");
array_push($poem, "");
array_push($poem, "MAKE A DIFFERENCE FOR A BETTER WORLD");
array_push($poem, "");
array_push($poem, "copyright Growth Network. All rights reserved.");
array_push($poem, "");
array_push($poem, "");
array_push($poem, "");
array_push($poem, "");
array_push($poem, "WHY YOU SHOULD SIGN THE PETITION FOR PEACE");
array_push($poem, "by");
array_push($poem, "David Levene");
array_push($poem, "");
array_push($poem, "Sign this Petition For Peace"); 
array_push($poem, "Improve the outlook in the Middle East");
array_push($poem, "And start a world-wide probe"); 
array_push($poem, "To end war around the globe."); 
array_push($poem, "");
array_push($poem, "We want all leaders to know"); 
array_push($poem, "We are not happy with the status quo."); 
array_push($poem, "So do your part"); 
array_push($poem, "Add your name to a promising start"); 
array_push($poem, "");
array_push($poem, "Make World Peace Now and Forever your theme"); 
array_push($poem, "And soon you will be able to share"); 
array_push($poem, "In the world's most beautiful dream."); 
array_push($poem, "");
array_push($poem, "I signed - how about you"); 
array_push($poem, "Think what this petition can do."); 
array_push($poem, "If each and everyone"); 
array_push($poem, "Encouraged only a few more"); 
array_push($poem, "");
array_push($poem, "It wouldn't be very long"); 
array_push($poem, "Until we ended war."); 
array_push($poem, "So place your imprint on world history"); 
array_push($poem, "And reap the rewards of a great opportunity.");
array_push($poem, "");
array_push($poem, "copyright 2006 Growth Network. All rights reserved."); 
array_push($poem, "");
array_push($poem, "");
array_push($poem, "You can view and sign the petition for peace by clicking below.");
array_push($poem, "You'll also see other poems, songs and much more.");
array_push($poem, "http://www.WorldPeaceSociety.org"); 
array_push($poem, "");
array_push($poem, "");
array_push($poem, "");

array_push($poem, "PETITION FOR PEACE");
array_push($poem, "by");
array_push($poem, "David Levene");
array_push($poem, "");
array_push($poem, "We want peace!");
array_push($poem, "Not only in the Middle East, but everywhere");
array_push($poem, "Throughout the whole world, peace should prevail");
array_push($poem, "While tyranny and oppression lead to no avail.");
array_push($poem, "");
array_push($poem, "A better world can thrive and exist,");
array_push($poem, "World Peace Society's efforts to make it so must persist");
array_push($poem, "And you can help bring such a situation about");
array_push($poem, "By signing this petition you show your clout.");
array_push($poem, "");
array_push($poem, "A specific plan for peace must be utilized");
array_push($poem, "One that the world has not yet realized");
array_push($poem, "'World Peace Now and Forever' may do");
array_push($poem, "But alternatives should be examined thru and thru.");
array_push($poem, "");
array_push($poem, "Let our leaders and representatives know for sure");
array_push($poem, "That anything less they show - will not endure");
array_push($poem, "Yes, all our efforts must persist");
array_push($poem, "Until a more just and better world does exist.");
array_push($poem, "");
array_push($poem, "copyright 2006 Growth Network. All rights reserved.");
array_push($poem, "");
array_push($poem, "");
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
<font color="000000"><a href="../peace_petitions.php"><font size="3"><b>Click Here</font></a> to sign the petition for peace</b></font>
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
<a href="../sendapoem.php"><font size="3"><b>Back To Other Poems</b></font> </a>
<br>
<a href="odetoabetterworld.php"> <font size="1">Ode To A Better World</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ahappierplace.php"> <font size="1">A Happier Place</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="whysignpetition.php"> <font size="1">Why You Should Sign The Petition For Peace</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="independenceanddemocracy.php"> <font size="1">Independence And Democracy</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<a href="intolerance.php"> <font size="1">Intolerance</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="opportunity.php"> <font size="1"> Opportunity</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="warnomore.php"> <font size="1">War No More</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="humancredo.php"> <font size="1">Essence Of Humanity Credo</font></a>
<br>
<br>
<a href="../join.php"><font size="3"><b>Next</b></font> </a>
</form>
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