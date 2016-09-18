<?php 
// composer require "mongodb/mongodb=^1.0.0" <-- at command line
// Registry
// Factory
require "vendor/autoload.php";
$m = new MongoDB\Client();
$db = $m->selectDatabase("another");
$collection = $db->tear;
$document = array( "title" => "Calvin and Hobbes", 
		"director" => "Bay Lu Wa", 
		"author" => "Bill Watterson",
		"class"	=> [
			[
				"name"	=> "WPA",
				"class_id"	=> 1,
			],
			[
				"name"	=> 'WPF',
				"class_id"	=> 2
			]
			
		] );
$collection->insertOne($document);
$document = array( "title" => "XKCD", "online" => true );
$collection->insertOne($document);
$cursor = $collection->find();
foreach ($cursor as $document) {
    echo $document["class"]['name'] . "<br />";
}