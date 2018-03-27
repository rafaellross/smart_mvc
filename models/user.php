<?php
  class User {
    public $id;
    public $username;
    public $name;
    public $created_at;
    public $administrator;
    
    private $password;    

    public function __construct($user) {
      $this->id             = $user['id'];
      $this->username       = $user['username'];
      $this->name           = $user['name'];
      $this->password       = $user['password'];
      $this->created_at     = $user['created_at'];
      $this->administrator  = $user['administrator'];
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM users');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $user) {
        $list[] = new User($user);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $user = $req->fetch();

      return new User($user);
    }

    public static function findByUsername($username) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      
      $req = $db->prepare('SELECT * FROM users WHERE username = :username');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('username' => $username));
      $user = $req->fetch();      
      return new User($user);
    }
    
    public function checkPassword($password){
        if(password_verify($password, $this->password)){
            return true;
        } else {
            return false;
        }
    }
    
  }
