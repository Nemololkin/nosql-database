<?php
include "env.php";
if(!isset($_GET['id'])) {
	echo "That is not a valid id";
	exit;
}
$document = $collection->findOne([
     '_id' => new MongoDB\BSON\ObjectID($_GET['id'])
	 ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>students form</title>
</head>

<body>
   <h1>Enter information about students</h1>
   
   <form action="./update.php" method = "post">
   <input type = "hidden" name = 'id' value = "<?php echo $document['_id']; ?>">
   
     <label for "name">Name:</label></br>
     <input type = "text" value = "<?php echo $document['name'];?>" name="name" id = "name"><br>
	    
     <label for "lastName">Last name:</label><br>
     <input type = "text" value = "<?php echo $document['lastName'];?>" name="lastName" id="lastName"><br>
	   
     <label for "age">Age:</label><br>
     <input id="age" value = "<?php echo $document['age'];?>" type = "number" name="age"><br>
	 
	  <label for "profSub1">First profile subject:</label><br>
     <select id = "profSub1" name = "profSub1" >
	   <option value = "physics">physics</option>
	   <option value = "chemistry">chemistry</option>
	   <option value = "compScience">computer science</option>
	   <option value = "biology">biology</option>
	 </select><br>
	 
	 <label for "profSub2">Second profile subject:</label><br>
	 <select id = "profSub2" name = "profSub2" >
	   <option value = "physics">physics</option>
	   <option value = "chemistry">chemistry</option>
	   <option value = "computer science">computer science</option>
	   <option value = "biology">biology</option>
	 </select><br>
	
	 
	 <input type = "submit" value = "Enter">
	
   </form>
	
</body>
</html>