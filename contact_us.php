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

<div class="grid_19">
	<center><img src="images/logo.png" width="400px" height="79px" id="logo" alt="Jasso Lopes PllC. Corporate, Securities and M&A Law"></center>
</div>
<div class="clear"></div>
<div class="grid_19">
	<div id="linkbar">
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
<div class="grid_19" style="margin-top:20px;margin-left:40px;">
	<h1>Contact Us</h1>
	<form action="MAILTO:nicole@jassolopez.com" method="get" enctype="text/plain">
	Your Name:<br>
	<input type="text" name="name" value="" style="width:655px;height:28px;"><br><br>
	Your Email:<br>
	<input type="text" name="mail" value="" style="width:655px;height:28px;"><br><br>
	Your Message:<br>
	<textarea maxlength="511" rows="4" cols="80"></textarea><br><br>
	
	<input type="submit" value="Send" id="showgun"><label for="showgun"><img src="images/send_button.png" width="180"></label>
	</form>
	<br>
	<img src="images/cont_btm.png" width="300">
</div>
<div class="clear"></div>
<div class="grid_16 prefix_1">
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