<?php
  if ($_SERVER['REQUEST_METHOD'] !== "POST") {
	  echo "no data submitted";
	  exit;
  }
  
  include "env.php";
  
  $result = $collection -> updateOne(
  [ '_id' => new MongoDB\BSON\ObjectID($_POST['id'])],
   [ 
     '$set' => ['name' => $_POST['name'],
             'lastName' => $_POST['lastName'],
             'age' => $_POST['age'],
             'profileSubjects' =>
	             array(
		         '0' => $_POST['profSub1'],
		         '1' => $_POST['profSub2']
		       ),
            ]
    ],
  [ 
  'upsert' => true
  ]);
  
 ?>
  <h1>Thank you</h1>