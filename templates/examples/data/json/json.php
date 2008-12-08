<?php

$modules["json"] = array(
	"name" => "JSON",
	"type" => "utility",
	"description" => "JSON provides methods for transforming data between native JavaScript objects and their JSON string equivalent.",
	"cheatsheet" => false
);	

$examples["json_connect"] = array(
	name => "JSON with Y.io",
	modules => array("json"),
	description => "Use JSON to parse data received from Y.io calls",
	sequence => array(1),
	newWindow => "default",
	requires => array("node","io","dump","json-parse"),
	highlightSyntax => true
);
$examples["json_freeze_thaw"] = array(
	name => "Rebuilding class instances from JSON data",
	modules => array("json"),
	description => "Using the replacer and reviver parameters to reconstitute object instances",
	sequence => array(2),
	newWindow => "default",
	requires => array("node","json"),
	highlightSyntax => true
);
$examples["json_convert_values"] = array(
	name => "Adding new object members during parsing",
	modules => array("json"),
	description => "Using a currency conversion calculation to add a new price member to a JSON response",
	sequence => array(3),
	newWindow => "default",
	requires => array("node","io","json-parse"),
	highlightSyntax => true
);

?>
