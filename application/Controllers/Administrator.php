<?php 

class Administrator extends Controller{
	
	public function __construct(){
		new SessionManager();
		$check_auth = SessionManager::check_session_exists(array('email', 'firstname'));
		//print_r($_SESSION);

		if(!$check_auth){
			//session not set
			SessionManager::set_session(array("msg"=>"Unfortunately, This user is not Authenticated"));
			redirect('adminLogin');
		}

		$this->photoModel = $this->loadModel('PhotoModel');
		$this->eventModel = $this->loadModel('Event');
		$this->visitorModel = $this->loadModel('Visitor');
		$this->videoModel = $this->loadModel('VideoModel');
		$this->subscriberModel = $this->loadModel('SubscriberModel');
		$this->contactModel = $this->loadModel('ContactModel');
		
	}

	public function index(){
		$eventCount = count($this->eventModel->getAllEvents());
		$photoCount = count($this->photoModel->getAllPhotos());
		$videoCount = count($this->videoModel->getAllVideos());
		
		$data = [
			'eventCount'=>$eventCount,
			'photoCount'=>$photoCount,
			'videoCount'=>$videoCount,
		];
		
		new Template("administrator/dashboard.html", $data);
	}

	public function videos(){
		$data = [
			'videos' => $this->videoModel->getAllVideos(),
		];
		new Template("administrator/videos.html", $data);
	}

	public function subscribers(){
		$data = [
			'subscribers' => $this->subscriberModel->get_all_subscribers(),
		];
		new Template("administrator/subscribers.html", $data);
	}

	public function deleteSubscriber(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = htmlentities($_POST['email']);
			$delete = $this->subscriberModel->delete($email);
			if($delete){echo json_encode(['status'=>'success','message'=>'$email successfully removed.']);}
			else{json_encode(['status'=>'failure', 'message'=>'Email cannot be removed, Please try again.']);}
		}
	}

	public function contactMessages(){
		$data = [
			'contact_messages' => $this->contactModel->get_all_messages(),
		];
		new Template("administrator/contact.html", $data);
	}

	public function contactMessage($id){
		$id = $id[0];
		$data = [
			'message' => $this->contactModel->get_message($id),
		];
		new Template("administrator/contactReply.html", $data);
	}

	public function sendEmail(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//send the reply to the user's email.
			$subject = htmlentities($_POST['subject']);
			$message = htmlentities($_POST['message']);
			$email = htmlentities($_POST['email']);
			$id = $_POST['id'];

			$from = "admin@cityofdavidmountofzion.org";
			$headers = "MIME-Version: 1.0 \r\n";
			$headers .= "FROM: City of David <$from>". PHP_EOL;
			$headers .= "Reply-To: $from \r\n";
			$headers .= "X-Mailer: PHP/".phpversion();

			if(mail($email, $subject, $message, $headers)){
				//print $id;
				$update = $this->contactModel->update_replied($id);
				if($update){
					echo json_encode(['status'=>'success', 'message'=>'Reply successfully sent.']);
				}else{
					echo json_encode(['status'=>'failure', 'message'=>'Message Status cannot be updated']);
				}
			}else{
				echo json_encode(['status'=>'failure', 'message'=>'Message cannot be replied.']);
			}

		}
	}


	public function addVideo(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$title = htmlentities($_POST['title']);
			$link = htmlentities($_POST['link']);
			$date_added = date('Y-m-d');
			$allVideos = $this->videoModel->getAllVideos();
			foreach($allVideos as $video){
				if($video->video_link == $link){
					echo json_encode(['status'=>'failure', 'message'=>'Video has already been added']);
					exit();
				}
			}
			$addVideo = $this->videoModel->addVideo($title, $link, $date_added);
			if($addVideo){echo json_encode(['status'=>'success', 'message'=>'Video Added successfully']);}
			else{echo json_encode(['status' => 'failure', 'message' => 'Video could not be added.']);}
		}
	}

	public function deleteVideo(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$id = htmlentities($_POST['id']);
			$statement = $this->videoModel->deleteVideo($id);
			if($statement){echo json_encode(['status' => 'success', 'message'=> 'Video removed successfully']);}
			else{echo json_encode(['status' => 'failure', 'message'=> 'Video cannot be removed, Try again.']);}
		}
	}

	public function viewSermons(){
		$sermons = $this->sermonModel->getAllSermon();
		$data = [
			'sermons'=>$sermons,
		];
		new Template("administrator/viewSermons.html", $data);
	}

	public function addSermon(){

		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
			
			$title = $_POST['title'];
			$sermonDate = $_POST['sermonDate'];
			$description = $_POST['description'];

			$audioFile = $_FILES['sermonAudio']['name'];
			$extensions = ['wav', 'mp3'];
			$maxSize = 5 * 1024 * 1024;
			
			$filePath = URL_ROOT.'uploads/audio/';
			$origFilePath = BASE_MEDIA_ROOT.'/public/uploads/audio/';

			$filePath = $filePath.$audioFile;
			$origFilePath = $origFilePath.$audioFile;

			$tmp_name = $_FILES['sermonAudio']['tmp_name'];
			$size = $_FILES['sermonAudio']['size'];
			$ext = pathinfo($_FILES['sermonAudio']['name'], PATHINFO_EXTENSION);

			if($size > $maxSize || !in_array($ext, $extensions)){
				SessionManager::flash_message("Audio files should not be more than 5mb and should either be *.mp3 or *.wav");
				redirect('addSermon');
			}

			$upload = move_uploaded_file($tmp_name, $filePath);
			if($upload){
				$addToDb = $this->sermonModel->insertSermon($title, $sermonDate, $description, $filePath, $origFilePath);
				if($addToDb){
					SessionManager::flash_message("Sermon Successfully Added");
					redirect("viewSermons");
				}
			}


		}


		new Template ("administrator/addSermon.html", $data=[]);

	}

	public function visitors(){
		$allVisitors = $this->visitorModel->getAllVisitors();
		$todayVisitors = $this->visitorModel->getTodayVisitors();

		$allVisitors = count($allVisitors);
		$todayVisitors = count($todayVisitors);

		$data=[
			'allVisitors'=>$allVisitors,
			'todayVisitors'=>$todayVisitors,
		];
		new Template("administrator/visitors.html", $data);
	}

	public function addEvent(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			new Template("administrator/addEvent.html", $data=[]);
		}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(isset($_POST['submit'])){
				$title = $_POST['title'];
				$description = $_POST['description'];
				$eventDate = $_POST['eventDate'];
				$extensions = array('jpg', 'png');
				$maxSize = 2097152;
				$imageFileName = $_FILES['eventPicture']['name'];

				//$testArray = array($title, $description, $eventDate, $imageFileName);
				//print_r($testArray);

				$fileExt = pathinfo($imageFileName, PATHINFO_EXTENSION);
				$fileSize = $_FILES['eventPicture']['size'];
				$fileTmpName = $_FILES['eventPicture']['tmp_name'];

				$orig_photo_path = BASE_MEDIA_ROOT."/public/uploads/gallery/$imageFileName";
				$photo_path = URL_ROOT."uploads/gallery/$imageFileName";


				if(!in_array($fileExt, $extensions)){
					SessionManager::flash_message("Image File Not Uploaded (File must be either a 'jpg' or a 'png'");
					redirect ('addEvent');
				}

				if($fileSize > $maxSize){
					SessionManager::flash_message("Image File Not Uploaded (File must not be larger than 2mb");
					redirect ('addEvent');
				}

				$uploadFile = move_uploaded_file($fileTmpName, $orig_photo_path);
				if($uploadFile){
					$addEvent = $this->eventModel->addNewEvent($title, $description, $eventDate, $imageFileName, $photo_path, $orig_photo_path);
					if($addEvent){
						SessionManager::flash_message("Event Added Successfully");
						redirect('adminEvents');
					}
				}
			}
		}
	}

	public function uploadPhoto(){
		new Template("administrator/uploadPhoto.html", $data=[]);
	}

	public function viewEvents(){
		$data = [
			'events'=>$this->eventModel->getAllEvents(),
		];
		new Template("administrator/viewEvents.html", $data);
	}

	public function deleteEvent(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$event = $this->eventModel->getEvent($_POST['id']);
			if($event){
				if(unlink($event->orig_photo_path)){
					$deleteEvent = $this->eventModel->deleteEvent(htmlentities($_POST['id']));
					if($deleteEvent){echo json_encode(['status'=>'success','message'=>'Event Deleted Successfully']);}
					else{echo json_encode(['status'=>'failure','message'=>'Event could not be deleted. Try again.']);}
				}else{echo json_encode(['status'=>'failure','message'=>'couldn\'t delete assocaited image file']);}
			}
		}
	}

	function updateEvent(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$title = htmlentities($_POST['title']);
			$description = htmlentities($_POST['description']);
			$eventDate = htmlentities($_POST['date']);
			$id = htmlentities($_POST['id']);

			$updateEvent = $this->eventModel->updateEvent($title, $description, $eventDate, $id);
			if($updateEvent){echo json_encode(['status'=>'success', 'message'=>'Event updated successfully']);}
			else{ echo json_encode(['status'=>'failure', 'message'=>'Event could not be updated, Try Again.']);}
		}
	}

	function deletePhotos(){
		$deletePhotos = $this->mediaModel->deletePhotos();
		if($deletePhotos){
			redirect('viewPhotos');
		}
	}

	public function viewPhotos(){
		$photos = $this->photoModel->getAllPhotos();
		$data = [
			'photos'=>$photos,
		];
		new Template("administrator/viewPhotos.html", $data);
	}

	public function deletePhoto(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$photo = $this->photoModel->getPhoto(htmlentities($_POST['id']));
			$deleteFile = unlink($photo->real_path);
			if($deleteFile){
				$deletePhoto = $this->photoModel->deletePhoto(htmlentities($_POST['id']));
				if($deletePhoto){echo json_encode(['status' => 'success', 'message'=>'Photo Successfully Deleted']);}
				else{echo json_encode(['status' => 'failure', 'message'=>'Photo could not be deleted, Try Again']);}
			}else{
				echo json_encode(['status' => 'failure', 'message' => "couldn't delete file on server"]);
			}
		}else{
			redirect('adminViewPhotos');
		}
	}

	public function photoUploader(){
		// RESPONSE FUNCTION
		function verbose($ok=1,$info=""){
  			// THROW A 400 ERROR ON FAILURE
  			if ($ok==0) { http_response_code(400); }
  			die(json_encode(["ok"=>$ok, "info"=>$info]));
		}

		// INVALID UPLOAD
		if (empty($_FILES) || $_FILES['file']['error']) {
  			verbose(0, "Failed to move uploaded file.");
		}
		
		// THE UPLOAD DESITINATION - CHANGE THIS TO YOUR OWN
		$filePath = BASE_MEDIA_ROOT."/public/uploads/gallery/";

		//$filePath = __DIR__ . DIRECTORY_SEPARATOR . "uploads";
		if (!file_exists($filePath)) { 
  			if (!mkdir($filePath, 0777, true)) {
    			verbose(0, "Failed to create $filePath");
  			}
		}

		$fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : $_FILES["file"]["name"];
		$filePath = $filePath.$fileName;
		$sourcePath = URL_ROOT."uploads/gallery/".$fileName;
		
		// DEAL WITH CHUNKS
		$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
		$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
		$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
		
		if ($out) {
  		$in = @fopen($_FILES['file']['tmp_name'], "rb");
  			if ($in) {
    			while ($buff = fread($in, 4096)) { fwrite($out, $buff); }
  			} else {
    			verbose(0, "Failed to open input stream");
  			}
  	
  			@fclose($in);
  			@fclose($out);
  			@unlink($_FILES['file']['tmp_name']);
  		} else {
  			verbose(0, "Failed to open output stream");
		}

		// CHECK IF FILE HAS BEEN UPLOADED
		if (!$chunks || $chunk == $chunks - 1) {
  			rename("{$filePath}.part", $filePath);
  			$date_added = date('Y-m-d');
			$addToDb = $this->photoModel->addPhoto($sourcePath, $fileName, $date_added, $filePath);
		}
		verbose(1, "Upload OK");
	}

	public function logout(){
		SessionManager::end_session();
		redirect('adminLogin');
	}
}

?>