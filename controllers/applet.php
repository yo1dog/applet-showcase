<?php
require_once 'models/applet.php';

$applet = null;

if (isset($__APPLET) && $__APPLET !== null) {
	$applet = $__APPLET;
}
else {
	$appletSlug = null;
	
	if (isset($_GET['slug']))
		$appletSlug = $_GET['slug'];
	
	$applet = Applet::getBySlug($appletSlug);
}

if ($applet === null) {
	http_response_code(404);
	die();
}

$pageTitle = $applet->name;

include 'views/header.php';
include 'views/applet.php';
include 'views/footer.php';
?>