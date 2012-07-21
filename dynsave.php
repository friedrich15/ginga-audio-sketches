<?php 

if (isset($_POST['id']) && isset($_POST['text'])) { 


  $mysqli = new mysqli("localhost", "eugen", "eitJedEstitJapoyp", "eugen_ginga");

  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }

  // http://en.wikipedia.org/wiki/SQL_injection
  $query = "UPDATE testtable SET comments='".$mysqli->real_escape_string($_POST['text'])."' where id=" . $mysqli->real_escape_string($_POST['id']); 

  $mysqli->query($query);

} 
