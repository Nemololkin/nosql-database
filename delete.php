<?php
include "env.php";

if(!isset($_GET['id'])) {
	echo "No document specified for delection";
	exit;
}

$_id = new MongoDB\BSON\ObjectID($_GET['id']);

$result = $collection -> deleteOne(['_id' => $_id]);

header("Location: read.php");
