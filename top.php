<?php
	// -l =logging mode. 
	// 1 specifies how often output will be repeated. 
	// This prints once, and exits.
	$topLog = exec('top -l 1 > top.txt');
	$cpuUsage = exec('top -o cpu');
	$scanWifi = exec('/System/Library/PrivateFrameworks/Apple80211.framework/Versions/Current/Resources/airport /usr/sbin/airport > scanWifi.txt');
?>

<html>
	<head>
		<title>Hardware Monitoring Samples</title>
	</head>
<body>
<pre><?php echo file_get_contents('top.txt'); ?></pre>
<pre><?php echo file_get_contents('scanWifi.txt'); ?></pre>
</body>
</html>