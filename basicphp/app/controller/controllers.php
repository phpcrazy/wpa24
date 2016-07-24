<?php 
function HomeController() {
	get_view('home');
}

function BlogController($category) {
	echo $category;
	get_view('blog');
}

function PageController() {
	get_view('page');
}

 ?>