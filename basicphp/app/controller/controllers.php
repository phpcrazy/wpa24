<?php 
function HomeController() {

	// $blogs = db_select('blogs');

	$blogs = db_select('blogs', ['title', 'body']);
	
	$data = [
	'site_title'	=> get_config('app.site_title'),
	'blogs'			=> $blogs 
	];
	echo get_view('home', $data);
}

function BlogController($action = null) {
	if($action == null) {
		echo get_view('blog');	
	} else if($action == "create") {
		echo get_view('blog_create');
	} else if($action == "save") {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$title = htmlentities($_POST['title']);
			$body = $_POST['body'];
			echo $title;
			echo "<br />";
			echo $body;
		} else {
			return "404!";
		}


	}
	
}

function PageController() {
	$data = [
	'site_title'	=> get_config('app.site_title')
	];
	echo get_view('page', $data);
}

?>


