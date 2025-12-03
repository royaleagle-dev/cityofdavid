<?php

class About extends Controller{
	public function index(){
		new Template("client/about.html", $data=[]);
	}
}

?>