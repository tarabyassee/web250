<?php 

  class Session {
    private $user_id;
    public $first_name;
    public $username;
    public $user_level;
    private $last_login;
    public const MAX_LOGIN_AGE = 60*60*24; //1 day

    public function __construct() {
      session_start();
      $this->check_stored_login();
    }

    public function login($user) {
      if($user) {
        //session fixation attack prevention
        session_regenerate_id();
        $this->user_id = $_SESSION['user_id'] = $user->id;
        $this->first_name = $_SESSION['first_name'] = $user->first_name;
        $this->username = $_SESSION['username'] = $user->username;
        $this->user_level = $_SESSION['user_level'] = $user->user_level;
        $this->last_login = $_SESSION['last_login'] = time();
      }
      return true;
    }

    public function is_logged_in() {
      return isset($this->user_id) && $this->last_login_is_recent();
    }

    public function is_admin_logged_in() {
      return $this->is_logged_in() && $this->user_level == 'a';
    }

    public function logout() {
      unset($_SESSION['user_id']);
      unset($_SESSION['first_name']);
      unset($_SESSION['username']);
      unset($_SESSION['user_level']);
      unset($_SESSION['last_login']);
      unset($this->user_id);
      unset($this->first_name);
      unset($this->username);
      unset($this->user_level);
      unset($this->last_login);
      return true;
    }

    private function check_stored_login() {
      if(isset($_SESSION['user_id'])) {
        $this->user_id = $_SESSION['user_id'];
        $this->first_name = $_SESSION['first_name'];
        $this->username = $_SESSION['username'];
        $this->user_level = $_SESSION['user_level'];
        $this->last_login = $_SESSION['last_login'];
      }
    }

    private function last_login_is_recent() {
      if(!isset($this->last_login)) {
        return false;
      } elseif(($this->last_login + self::MAX_LOGIN_AGE) < time()) {
        return false;
      } else {
        return true;
      }
    }

    public function message($msg="") {
      if(!empty($msg)) {
        //this is a set message
        $_SESSION['message'] = $msg;
        return true;
      } else {
        //this is a get message
        return $_SESSION['message'] ?? '';
      }
    }

    public function clear_message() {
      unset($_SESSION['message']);
    }

  }
?>
