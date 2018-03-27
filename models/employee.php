<?php
  class Employee {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $name;
    public $phone;

    public function __construct($employee) {
      $this->id             = $employee['id'];
      $this->name           = $employee['name'];
      $this->phone          = $employee['phone'];
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM employees');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $employee) {
        $list[] = new Employee($employee);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM employees WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $employee = $req->fetch();

      return new Employee($employee);
    }
    
    public static function findByName($name){
      $list = [];
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM employees WHERE name like :name');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('name' => '%' . $name . '%'));

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $employee) {
        $list[] = new Employee($employee);
      }

      return json_encode($list);        
    }
  }
