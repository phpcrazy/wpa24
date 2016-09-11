<?php 

class BlogController {
	public function index($category, $id) {

		$data = [
			'category' 	=> $category,
			'id'		=> $id,
			'students'	=> DB::table("students")->get()
		];

		var_dump($data);
		die();
		echo View::make("home", $data);
	}
 }
