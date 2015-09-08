<?php
/**
* WRAPPER
**/
$page = null;
if(isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = "home";

echo "header";

include "view/pages/".$test.".html";