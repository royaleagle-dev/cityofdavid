<?php

class Login{
    private $email;
    private $password;
    private $statement;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
        $this->database = new Database();
    }

    public function log_user_in(){
        $statement = $this->database->query("SELECT * FROM admin WHERE email=?", $params = array($this->email), $fetchmode = 'fetch');
        if(count($statement < 1)){
            $session = new SessionManager();
            SessionManager::flash_message("Incorrect Credentials.");
            redirect('adminLogin');
        }
        $supplied_password = $this->password;
        $hashed_password= $statement->password;
        if(password_verify($supplied_password, $hashed_password)){
            new SessionManager();
            SessionManager::set_session(array(
                'email'=>$statement->email,
                'firstname'=>$statement->firstname,
                )
            );
            print_r($_SESSION);
            return true;
        }else{
            return false;
        }
    }
}
?>