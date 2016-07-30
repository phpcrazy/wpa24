<?php 
function HomeController() {
	get_config('app.foo.bar');
	
	$data = [
		'site_title'	=> get_config('app.site_title'),
		'title'			=> 'Test Title',
		'body'			=> 'blah blah blah!'
	];
	echo get_view('home', $data);
}

function BlogController($category) {
	echo $category;
	echo get_view('blog');
}

function PageController() {
	$data = [
		'site_title'	=> get_config('app.site_title')
	];
	echo get_view('page', $data);
}

 ?>









