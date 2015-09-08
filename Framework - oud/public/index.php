<?php
$template = "default";
define("TEMPLATE" , $template);

//if(file_exists('templates/'.TEMPLATE.'/index.php'))
	require 'templates/'.TEMPLATE.'/index.php';
//else
//	echo "template not found";
?>