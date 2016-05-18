<?php

	/*
	 * Replace all calls to "api.asmx/" with "api.php?"
	 * Update $asmxURL with the link to your ASMX file
	 * Place in same folder as "api.asmx/"
	 * Run a local PHP server in the root folder
	 * It will handle the serving of all HTML, CSS, and JS
	 * Unix Command: 'php -S 127.0.0.1:8080'
	 */

	/****** Change this Line only ******/
	$asmxURL = "http://webcrawleralexbbt.cloudapp.net/api.asmx/";

	$url = $asmxURL . array_keys($_GET)[0];

	if (strlen($_GET[array_keys($_GET)[0]]) > 0) {
		$url .= "=" . $_GET[array_keys($_GET)[0]];
	}

	echo file_get_contents($url);

?>