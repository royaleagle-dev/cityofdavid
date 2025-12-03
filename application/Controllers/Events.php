<?php

class Events extends Controller{
	public function __construct(){
		$this->eventModel = $this->loadModel('Event');
	}
	public function index(){
		$data = [
			'events' => $this->eventModel->getAllEvents(),
		];
		new Template("events.html", $data);
	}
}

?>