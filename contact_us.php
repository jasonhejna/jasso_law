<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Jason Hejna">
<link rel="shortcut icon" href="images/gauge.ico">
<link rel="icon" href="images/gauge.ico">
<title>Jasso Lopez PLLC - Corporate, Securities and M&A Law</title>

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="960_24_col.css" />
	<link href="css/ui-lightness/jquery-ui-1.9.1.custom.css" rel="stylesheet">
	<script src="js/jquery-1.8.2.js"></script>
	<script src="js/jquery-ui-1.9.1.custom.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		$('#hideshow').hide();
		$('#showgun').hide();
		$('#downtown_rythm').hide();
});
	
function theshow() {
	$('#hideshow').show();
}
</script>
</head>
<body>
	<!-- 100% width lines blueline_one/two, absolute position outside of 960 grid (here) -->
	<div id="blue_line"></div>
	<div id="bro_blue_two"></div>
	<div id="darkblueline"></div>
	<div id="bro_darkblueline_two"></div>

<div class="container_24">
<div class="clear"></div>

<div class="grid_24">
	<center><img src="images/logo.png" width="500px" height="99px" id="logo" alt="Jasso Lopes PllC. Corporate, Securities and M&A Law"></center>
</div>
<div class="clear"></div>
<div class="grid_24">
	<div id="linkbar">&nbsp;
	<a href="index.php">Home &nbsp;&nbsp;&nbsp;|</a>
	<a href="#" onclick="theshow();">Attorneys &nbsp;&nbsp;&nbsp;|</a>
	<a href="contact_us.php">Contact Us</a>
	</div>
	<span id="hideshow">
	<div id="linkbar">
	<a href="attorneys_erik.php" onMouseOver=document.getElementById("foo").style.color="#ea8018"; onMouseout=document.getElementById("foo").style.color="#FFF"; id="foo">Erik A. Lopez, Sr.</a>
	<a href="attorneys_nicole.php" onMouseOver=document.getElementById("bar").style.color="#ea8018"; onMouseout=document.getElementById("bar").style.color="#FFF"; id="bar">|&nbsp;&nbsp;&nbsp;Nicole Jasso Lopez</a>
	</div>
	</span>
	
</div>
<div class="clear"></div>
<div class="grid_20 prefix_1">
<div id="move_lots">
	<br>
	<div id="finefine">Contact Us</div>
	<form action="feedback.php" method="post">
<table border="0" cellpadding="8" cellspacing="8">
<tr><td><label for="tswname">Your Name:</label><br><input type="text" name="fullname" id="tswname" size="61" /></td></tr>
<tr><td><label for="tswemail">Your Email:</label><br><input type="text" id="tswemail" name="email" size="61" /></td></tr>
<tr>
<td colspan="2">
<label for="tswcomments">Your Message:</label><br>
<textarea rows="6" cols="68" name="comments" id="tswcomments" maxlength="1123"></textarea>
</td>
</tr>
<tr>
<td colspan="2">
<label for="downtown_rythm"><img src="images/send_button.png"></label> <input type="submit" value="Send Feedback" id="downtown_rythm" /><br />
</td>
</tr>
</table>
</form>
<br>
<div id="text_left">
<b>Please direct all correspondence to:</b><br><br>
Jasso Lopez PLLC<br>
404 Running Bear Court<br>
Euless, Texas 76039<br>
Telephone:   214-601-6304
</div>

</div>
</div>
<div class="clear"></div>
<div class="grid_20 prefix_1">
	<br><br>
<div id="floatleft">
 &copy; Jasso Lopez PLLC – A boutique law firm offering corporate, securities and M&A services
</div>
<div id="floatright">
<a href="legal_notices.php" id="beblack">Legal Notices</a>
</div>
<br><br><br>
</div>

</div> <!-- end containter_24 -->
</body>
</html>