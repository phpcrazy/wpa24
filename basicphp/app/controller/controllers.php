<?php 
function HomeController() {

	// $blogs = db_select('blogs');

	$blogs = db_select('blogs', ['title', 'body']);
	
	$data = [
	'site_title'	=> get_config('app.site_title'),
	'title'			=> 'Test Title',
	'body'			=> 'blah blah blah!',
	'blogs'			=> $blogs 
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


