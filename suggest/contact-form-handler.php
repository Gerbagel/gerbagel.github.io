<?php
$emailBody = $_POST["emailBody"];
$subject = "Suggestion";
$toEmail = "gerbagel@hotmail.com";
$fromEmail = $_POST["email"];
mail($toEmail, $subject, $emailBody, $fromEmail);
?>
<!doctype html>
<html>
	<head>
		<title>Thank you!</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	
	<body>
		<div id="header">
			<h1>Thank you for your input!</h1>
		</div>
		<div id="mcont">
			<div id="sidebar">
				<div class="butt">
                	<a href="https://gerbagel.github.io/siteisuppose/">OG Crab site</a>
            	</div>
				<div class="butt">
					<a href="https://gerbagel.github.io/siteisuppose/rick/">Rick-Roll</a>
				</div>
            	<div class="butt">
            	    <a href="http://gerbagel.github.io/siteisuppose/weeb/">Weeb site</a>
            	</div>
            	<div class="butt">
            	    <a href="http://gerbagel.github.io/siteisuppose/lofiradio/">LoFi Hip Hop Radio</a>
            	</div>
				<div class="butt">
					<a href="https://gerbagel.github.io/siteisuppose/africa/">Africa by Toto</a>
				</div>
				<div class="butt">
					<a href="https://gerbagel.github.io/siteisuppose/downunder/">Upside Down</a>
				</div>
				<div class="butt">
					<a href="https://gerbagel.github.io/siteisuppose/dance/">Dance Fucker</a>
				</div>
				<div class="butt">
					<a href="https://gerbagel.github.io/siteisuppose/ducked/">DuckTales</a>
				</div>
				<div class="butt">
					<a href="https://gerbagel.github.io/siteisuppose/thanos/">Thanos Yes</a>
        		</div>
            	<div class="butt">
            	    <a href="http://gerbagel.github.io/siteisuppose/index/">Index</a>
            	</div>
			</div>
			<div id="container">
				<h2>Go to any other page to continue browsing</h2>
			</div>
		</div>
	</body>
</html>