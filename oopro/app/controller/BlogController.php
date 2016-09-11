<?php 

class BlogController {
	public function index($category, $id) {

		$data = [
			'category' 	=> $category,
			'id'		=> $id 
		];
		echo View::make("home", $data);
	}
 }
