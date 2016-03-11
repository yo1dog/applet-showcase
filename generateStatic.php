<?php
require_once 'models/applet.php';

function captureOuputToFile($phpFilename, $outFilename, $applet = null) {
	$file = fopen($outFilename, 'w');
	
	$__APPLET = $applet;
	
	ob_start();
	include($phpFilename);
	$out = ob_get_clean();
	
	fwrite($file, $out);
	fclose($file);
}

captureOuputToFile('controllers/appletList.php', 'static/index.html');
captureOuputToFile('controllers/security.php',   'static/security.html');

$applets = Applet::getList();
foreach ($applets as $applet) {
	captureOuputToFile('controllers/applet.php', 'static/' . $applet->slug . '.html', $applet);
}
?>
