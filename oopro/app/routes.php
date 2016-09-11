<?php 

return [
	'/'		=> [
		'controller' => 'HomeController@index'
	],
	'blog'	=> [
		'controller' 	=> 'BlogController@index',
		'params'		=> 'category, id'
		],
	'page'	=> [
		'controller'	=> 'PageController@index',
		'params'	=> 'category'
	]
];