<?php 

include 'config/db.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM posts WHERE id='$id'");

if ($query) {
	header("Location: index.php");
}else{
	echo "Something went wrong...";
}


?>