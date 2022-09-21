<?php
require("week4Functions.php");
?>

<!doctype html>
<html>
	<head>
		<script src="./jquery/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="./foundation/css/foundation.css">
		
		 
		<style>
			.cell {
				border: 1px solid black;
			}
			#sidebar {
				padding: 10px;
			}
			#body {
				padding: 10px;			
			}
			.nav {
				margin: 10px;
			}
			#header {
				background: white;
			}
			#entire {
				margin: 50px;
			}
			#img{
	width: 100%;
    height: 130px;
	border-style: single;
	
}
#footer{
width: 100%;
height: 36px;
position: fixed;
bottom: 0px;
padding: 13px 7px 0px 17px;
font-size: 13px;
color: #848484;
background-color: #F2F2F2;
border-top: 1px solid #E6E6E6;
}
.rights{
        text-align: left;
}
.design{
       position: absolute;
       right:0;
       margin-right: 10px;
}
		</style>
		<script>
		$( document ).ready(function() {
			$("#alert").on("click", callAlert);
			$("#change").on("click", callChange);
			
			function callAlert() {
				alert("Alert!!! You are Awesome!");
			}
			function callChange() {
				$("#sidebar").html("Loren Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..");
			}
		});
		
		</script>
	</head>
	<body>
	    
		<div id=entire>
			<div class="grid-x">
				<div id=header class="cell small-12 medium-12 large-12 text-right">
					<button id=alert class="button nav">Alert</button>
					<button id=change class="button nav">Update</button>
					<img id =img
src="https://s1.1zoom.me/big0/171/Austria_Mountains_Lake_Tyrol_panorama_Alps_597948_1280x534.jpg" alt="Photos Nature Austria panoramic Tyrol mountain reflected Lake Alps Panorama Mountains Reflection"</igm>
				</div>
			</div>
			<div class="grid-x">
				<div id=sidebar class="cell small-10 medium-4 large-4">
			<strong>Loren Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
				<div id=body class="cell small-12 medium-8 large-8"><?php PrintMsg("This is the body"); ?>
				</div>
			</div>
		</div>
		<div id="footer">
<span class="rights"><a>20 Cesar Spaniol Ramos, All Rights Reserved</a></span>
<span class="design"><a>Design by Cesar Spaniol Ramos</a></span></div> 
	</body>
</html>