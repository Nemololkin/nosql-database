<?php
   
  if ($_SERVER['REQUEST_METHOD'] !== "POST") {
	  echo "no data submitted";
	  exit;
  }
  
  include "env.php";
  
  $result = $collection -> insertOne([
  'name' => $_POST['name'],
  'lastName' => $_POST['lastName'],
  'age' => $_POST['age'],
  'profileSubjects' =>
	   array(
		   '0' => $_POST['profSub1'],
		   '1' => $_POST['profSub2']
		),
  ]);
  
 ?>
  <h1>Thank you</h1>