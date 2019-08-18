<?php
session_start();
require '.config.php';
include 'utilities.php';

$mode = 'home';

if (isset($_GET['mode'])) {
	$mode = $_GET['mode'];
}

echo html_top();
echo html_banner();


echo html_bottom();