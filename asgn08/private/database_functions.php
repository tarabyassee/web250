<?php
//creating a function to be able to warn a user if a connection was not created
// check to see if there was an error number on this object. Errno is a property on this object, the error number will tell you what type of error you have with the object mysqli
function dbConnect() {
  $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  confirmDbConnect($connection);
  return $connection;
}
function confirmDbConnect($connection) {
  if($connection->connect_errno) {
    $msg = "Database connection failed: ";
    $msg .= $connection->connect_errno;
    $msg .= " (" .$connection->connect_errno . ")";
    exit($msg);
  }
}

function dbDisconnect($connection) {
  if(isset($connection)) {
    $connection->close();
  }
}

?>