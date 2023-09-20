<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public static $flying = "yes";
    public static $instance_count = 0;
    public static $egg_num = 0;

    public static function create() {
      $className = get_called_class();
      $newInstance = new $className;
      self::$instance_count++;
      return $newInstance;
    }

/*     function can_fly() {
        if ( $this->flying == "yes" ) {
            $flying_string = "can fly";
        } else {
            $flying_string = "is stuck on the ground";
        }
        return  $flying_string ;
    } */

    public static function can_fly() {
      $flying_string = static::$flying == "yes" ? $flying_string = "can fly" : "is stuck on the ground";
      return $flying_string;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
    public static $egg_num = '3-4, sometimes 5';
}

class Kiwi extends Bird {
    public $name = "kiwi";
    public $diet = "omnivorous";
    public static $flying = "no";
}


?>

