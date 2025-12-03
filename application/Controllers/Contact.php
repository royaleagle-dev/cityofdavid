<?php

class Contact extends Controller{
	public function index(){
		new Template("client/contact.html", $data=[]);
	}

	public function give(){
		new Template("client/give.html", $data=[]);
	}
}

?>