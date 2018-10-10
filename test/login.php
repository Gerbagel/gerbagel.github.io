<?php
	$pass = strip_tags($_POST["pass"]);
	if ($pass == "kevinisgay") {
		echo '<script type="text/javascript">
					window.location = "https://gerbagel.github.io/siteisuppose/test/test/"
			  </script>';
		die();
	}
	else {
		echo "<h1>Suck my ass senpai</h1>";
		die();
	}
?>