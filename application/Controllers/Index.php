<?php

class Index extends Controller {

    private $contactModel;

    public function __construct(){
        $this->contactModel = $this->loadModel('ContactModel');
    }


    public function index(){
        $data = [];
        new Template("client/index.html", $data);
    }

    public function send_message(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //$name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $subject = htmlentities($_POST['subject']);
            $message = htmlentities($_POST['message']);
            $date = date('Y-m-d');

            $add = $this->contactModel->add_message('User', $email, $subject, $message, $date);
            if($add){
                echo json_encode(['status'=>'success', 'message'=>'Your message was sent successfully.']);
            }else{
                echo json_encode(['status'=>'failure', 'message'=>'Message could not be sent. Please try again.']);
            }
        }
    }
}

?>