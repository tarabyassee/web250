<?php

function urlFor($scriptPath) {
  if($scriptPath[0] !='/') {
    $scriptPath = "/" . $scriptPath;
  }
  return WWW_ROOT . $scriptPath;
}

function u($string="") {
  return urlencode($string);
}

function rawU($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function redirectTo($location) {
  header("Location: " . $location);
  exit;
}

function isPostRequest() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function isGEtRequest() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>