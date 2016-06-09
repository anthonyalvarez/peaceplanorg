// JavaScript for http://www.worldpeacesociety.org/songs/outstandingme.php
// URL of this file: http://www.worldpeacesociety.org/songs/An_Outstanding_Me.js
// Copyright 2011 by World Peace Society and Growth Network. All rights reserved.
// Purpose: Creates an instance, using the W3C-standard object tag, of the Adobe Shock Wave Flash (SWF) Player,
// and circumvents the need for the user to click once to activate the control.
// This code is compatible with all browsers/platforms, and a W3C non-standard embed tag isn't needed.
// References: http://support.microsoft.com/kb/555662/
//             http://www.microsoft.com/technet/security/advisory/912945.mspx
//             http://support.microsoft.com/kb/912945
//             http://msdn.microsoft.com/library/default.asp?url=/workshop/author/dhtml/overview/activating_activex.asp
//             http://www.1pixelout.net/code/audio-player-wordpress-plugin/
//             http://dev.wp-plugins.org/browser/audio-player/trunk/
// 
document.write('<object align="bottom" data="http://www.worldpeacesociety.org/songs/MP3Playr.swf" height="24" id="filename" type="application/x-shockwave-flash" width="290">');
document.write('<param name="FlashVars" value="playerID=2&amp;bg=0x838383&amp;leftbg=0x990000&amp;lefticon=0xffffff&amp;rightbg=0x5d5d5b&amp;rightbghover=0xa65d34&amp;righticon=0x5d5d5b<br>');
document.write('&amp;righticonhover=0xffcc00&amp;text=0xF2F2F2&amp;slider=0xF2F2F2&amp;track=0xFFFFFF&amp;border=0xFFFFFF&amp;loader=0x838383&amp;soundFile=http://www.worldpeacesociety.org/songs/An_Outstanding_Me.mp3">');
document.write('<param name="loop" value="false">');
document.write('<param name="menu" value="false">');
document.write('<param name="movie" value="http://www.worldpeacesociety.org/songs/MP3Playr.swf">');
document.write('<param name="quality" value="high">');
document.write('<param name="wmode" value="transparent"></object>');
