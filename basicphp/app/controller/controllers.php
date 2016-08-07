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
		$blogs = db_select('blogs', ['title', 'body']);
	
		$data = [
			'site_title'	=> get_config('app.site_title'),
			'blogs'			=> $blogs 
		];

		echo get_view('home', $data);	
	} else if($action == "create") {
		echo get_view('blog_create');
	} else if($action == "save") {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$title = htmlentities($_POST['title']);
			$body = $_POST['body'];
			$data = [
				'title'	=> $title,
				'body'	=> $body
			];
			db_insert('blogs', $data);
			redirect(site_url() . "/blog");
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


