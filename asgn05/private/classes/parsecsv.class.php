<?php

  class ParseCSV {
    public static $delimiter = ',';
    private $filename;
    private $header;
    private $data;
    private $rowCount = 0;


    public function __construct($filename='') {
      if($filename !='') {
        $this->file($filename);
      }
    }

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
      //grab the file with the name 'filename' and read the data into a variable called $file
      //while it is not the end of the file, use fgetcsv to parse the data from $file and put it into an array. Each row of data will be a record, with unlimited length for each line, using the delimiter of a comma
      //if a row of data ($row) is empty, keep going until the end of the file
      //next, the if/else condition asks if the header property is not set, set it with the first row of the file. If this property($header) is set, combine the $header property with the row data.
      //Close the file and return the array of data.
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
