<?php

class Vision extends Controller{
	public function index(){
		new Template("vision.html", $data=[]);
	}
}


?>