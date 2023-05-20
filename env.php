<?php 
   require 'vendor/autoload.php';
   $m = new MongoDB\Client("mongodb://localhost:27017");
   $database = $m->students;
   $collection = $database->st;
   echo "connected succesfully" 
   
?>