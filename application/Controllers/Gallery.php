<?php

class Gallery extends Controller{
	
	private $photoModel;

	public function __construct(){
		$this->photoModel = $this->loadModel('PhotoModel');
	}

	public function index(){
		
		$data = [
			'photos' => $this->photoModel->getAllPhotos(),
		];

		new Template("gallery.html", $data);
	}
}

?>