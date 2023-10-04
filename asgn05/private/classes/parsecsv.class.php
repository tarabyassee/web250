<?php

  class ParseCSV {
    /* this property sets the delimiter the parse function looks for in the file it read the data from. In this example, it is set to a comma. */
    public static $delimiter = ',';
    /* this property is the name of the file to be read */
    private $filename;
    private $header;
    private $data=[];
    private $rowCount = 0;


    public function __construct($filename='') {
      if($filename !='') {
        $this->file($filename);
      }
    }
    /* this function called file, takes and checks to make sure that the property, $filename, exists and is readable. It returns error messages if the file named   */
    public function file($filename) {
      if(!file_exists($filename)) {
        echo "File does not exist.";
        return false;
      } elseif(!is_readable($filename)) {
        echo "File is not readable.";
        return false;
      }
      $this->filename = $filename;
      return true;
    }

    public function parse() {
      if(!isset($this->filename)) {
        echo "file not set.";
        return false;
      }
      $this->reset();
      $file = fopen($this->filename, 'r');
      while(!feof($file)) {
        $row = fgetcsv($file, 0, self::$delimiter);
        if($row == [NULL] || $row ===FALSE) {
          continue;
        }
        if(!$this->header) {
          $this->header = $row;
        } else {
          $this->data[] = array_combine($this->header, $row);
          $this->rowCount++;
        }
      }
      fclose($file);
      return $this->data;
    }

    public function lastResults() {
      return $this->data;
    }

    public function row_count() {
      return $this->rowCount;
    }

    private function reset() {
      $this->header = NULL;
      $this->data = [];
      $this->rowCount = 0;
    }
  }
?>
