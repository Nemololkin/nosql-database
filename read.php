<?php
require "env.php";
$students = $collection->find()->toArray();
?>

<table>
  <tr>
  <th>ID</th>
    <th>Name</th>
    <th>Last name</th>
    <th>Age</th>
	<th>Profile subjects</th>
  </tr>

  <?php foreach ($students as $student): ?>
    <tr>
	<td><?php echo $student['_id']; ?></td>
      <td><?php echo $student['name']; ?></td>
      <td><?php echo $student['lastName']; ?></td>
	  <td><?php echo $student['age']; ?></td>
	  <td><?php echo $student['profileSubjects'][0], " and ", $student['profileSubjects'][1]; ?></td>
      <td><form action = 'delete.php' method = 'get'><input type = 'hidden' name = 'id' value = "<?php echo $student['_id']; ?>"><button type = 'submit'>Delete</button></form></td>
	  <td><form action = 'edit.php' method = 'get'><input type = 'hidden' name = 'id' value = "<?php echo $student['_id']; ?>"><button type = 'submit'>Edit</button></form></td>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

		
		