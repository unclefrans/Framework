<?php
/**
* WRAPPER
**/
$config = simplexml_load_file('config/config.xml');
$DBuser = $config->DatabaseUser;
$DBpass = $config->DatabasePass;
$Template = $config->Template;

try {
    $dbh = new PDO('mysql:host=localhost;dbname=waf', $DBuser, $DBpass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$page = null;

if(isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = "home";

include "view/pages/".$Template.".html";

$content = $dbh->prepare("SELECT article FROM test WHERE title = '$page'");
$content->execute();

echo($content->fetchColumn());