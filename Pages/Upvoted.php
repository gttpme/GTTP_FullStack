<?php

//this script will check to make sure the user is logged into an account
//before sending an upvote to the database for the comment that has been clicked.

session_start();

require_once '../config.php';

if(isset($_SESSION['username'])) {
$UserID = $_SESSION['user_account_id'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$PostID = $_POST['val'];
	$UsersSide = $_POST['Side'];
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
	
	//votes are added to the Post table as well as the userupvotes table. Userupvotes will most likely be
	//deleted, so far there haven't been any drawbacks to keeping this data as a column in the POST table.
	
	$q2 = $pdo->query("UPDATE post SET upvotes=upvotes+1, Side = $UsersSide WHERE ID =$PostID");
	
}
}
}
else {
	echo "You need to log in before commenting";
}
  ?>