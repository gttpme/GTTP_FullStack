<?php

//this sends a query to the database that increments the total vote count for a comment.
//Our database currently has a table exclusively for keeping track of upvotes. This is most likely
//going to be deleted because a column in the 'post' table seems to meet all of our needs so far.

session_start();

require_once '../config.php';

if(isset($_SESSION['username'])) {
$UserID = $_SESSION['user_account_id'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$PostID = $_POST['val'];
	$ThreadID = 1;
	$Vote = 1;
	
	
	
	$nRows = $pdo->query("SELECT * FROM `userupvotes` WHERE `UserID` = $UserID AND `ThreadID` = $ThreadID")->fetchColumn();
	if($nRows > 0) {
		
	echo "You have already voted!";
	}
	else {
	
	$stmt = $pdo->prepare("INSERT INTO `userupvotes`  (`UserID`, `PostID`, `ThreadID`, `Vote`) VALUES(?,?,?,?)");
	$stmt->execute(array($UserID, $PostID, $ThreadID,$Vote));
	echo "value received!";
	
	
	$q2 = $pdo->query("UPDATE post SET upvotes=upvotes+1 WHERE ID =$PostID");
}
}
}
else {
	echo "You need to log in before commenting";
}
  ?>