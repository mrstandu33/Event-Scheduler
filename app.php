<?php
	if (filter_input(INPUT_GET, "CORSProxy") != null && !empty(filter_input(INPUT_GET, "CORSProxy")))
		echo(htmlspecialchars(file_get_contents(urldecode($_GET["CORSProxy"]))));
	die();
?>