<?php
  $conn = new mysqli('localhost', 'root', '', 'conferencias-ale');
  if($conn->connect_error){
    echo $error -> $conn->connect_error;
  }
?>