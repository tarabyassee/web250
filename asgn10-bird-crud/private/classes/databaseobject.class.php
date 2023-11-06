<?php 
class DatabaseObject {
  static protected $database;
  static protected $table_name = "";
  static protected $columns = [];
  public $errors = [];

  static public function set_database($database) {
    self::$database = $database;
  }

  static public function find_by_sql($sql) {
    $result = self::$database->query($sql);
    if(!$result) {
      exit("Database query failed.");
    }
    //convert results into objects//
    $object_array= [];
    while($record = $result->fetch_assoc()) {
      $object_array[] = self::instantiate($record);
    }
    $result->free();
    return $object_array;
  }

  static public function find_all() {
    $sql = "SELECT * FROM birds";
    return self::find_by_sql($sql);
  }

  static public function find_by_id($id) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static protected function instantiate($record) {
    $object = new self;
    //automatic assignment is faster and reusable
    foreach($record as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    return $object;
  }

  

  
}
?>