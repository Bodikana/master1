<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../db.php");

if(isset($_GET)) {

	//Delete Freelancers using id and redirect
	$sql = "DELETE FROM freelancers WHERE id_freelancer='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: freelance-approval.php");
		exit();
	} else {
		echo "Error";
	}
}