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
<title>Jasso Lopez PLLC - Corporate, Securities and M&A Law Dallas, Texas 75201</title>

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="960_24_col.css" />
	<link href="css/ui-lightness/jquery-ui-1.9.1.custom.css" rel="stylesheet">
	<script src="js/jquery-1.8.2.js"></script>
	<script src="js/jquery-ui-1.9.1.custom.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		$('#hideshow').hide();

});
	
function theshow() {
	$('#hideshow').show();
}
</script>
</head>
<body>
	<!-- 100% width lines blueline_one/two, absolute position outside of 960 grid (here) -->
	<div id="blue_line"></div>
	<div id="blue_twoss"></div>
	<div id="darkblueline"></div>
	<div id="darkblueline_twoss"></div>

<div class="container_24">
<div class="clear"></div>

<div class="grid_24">
	<center><img src="images/logo.png" width="500px" height="99px" id="logo" alt="Jasso Lopes PllC. Corporate, Securities and M&A Law"></center>
</div>
<div class="clear"></div>
<div class="grid_24">
	<div id="linkbar">
		<?php include 'main_links.php'; ?>
	</div>
	<span id="hideshow">
	<div id="linkbar">
	<?php include 'attorney_dropdown.php' ?>
	</div>
	</span>
	
</div>
<div class="clear"></div>
<div class="grid_24" style="margin-top:20px;">
	<br>

	<center><img src="images/rep_matters.png" width="730" ></center>
</div>
<div class="clear"></div>
<div class="grid_20 prefix_1">
	<br><br><br><br><br>
<div id="floatleft">
 &copy; Jasso Lopez PLLC – A boutique law firm offering corporate, securities and M&A services
</div>
<div id="floatright">
<a href="legal_notices.php" id="beblack">Legal Notices</a>
</div>
</div>

</div> <!-- end containter_24 -->
</body>
</html>