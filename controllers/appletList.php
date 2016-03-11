<?php
require_once 'models/applet.php';

$applets = Applet::getList();
$pageTitle = "Applets";

include 'views/header.php';
include 'views/appletList.php';
include 'views/footer.php';
?>