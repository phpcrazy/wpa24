<?php 
use Thiha\App\Application;

class BlogController {
	private $cat;

	public function __construct() {
		$this->cat = Application::get("cat");
	}

	public function index($category, $id) {
		$this->cat->eat();
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
