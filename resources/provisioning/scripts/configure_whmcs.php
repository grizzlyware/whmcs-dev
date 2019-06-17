<?php

$whmcsDbHost = "localhost";
$whmcsDbUser = "whmcs";
$whmcsDbPass = "password";
$whmcsDbName = "whmcs_default";

touch("/var/www/html/whmcs/configuration.php");

// This is only acceptable as this is a disposable machine. Never do this in production.
chmod("/var/www/html/whmcs/configuration.php", 0777);

$configFileContent = file_get_contents("/resources/provisioning/whmcs/configuration.php.new");

$configFileContent = str_replace(
	[
		"WHMCS_LICENSE",
		"WHMCS_DB_HOST",
		"WHMCS_DB_USER",
		"WHMCS_DB_PASS",
		"WHMCS_DB_NAME",
		"WHMCS_CC_HASH"
	],
	[
		"Dev-YOUR_LICENSE_HERE",
		$whmcsDbHost,
		$whmcsDbUser,
		$whmcsDbPass,
		$whmcsDbName,
		md5(microtime() . "bL6Luz8r")
	], $configFileContent);

// Write the file
file_put_contents("/var/www/html/whmcs/configuration.php.new", $configFileContent);



