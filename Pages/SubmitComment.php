<?php
session_start();


require_once '../config.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$UserComment = $_POST['comment'];
	$StartingUpvotes = 0;
	
    $stmt = $pdo->prepare("INSERT INTO `post` (`content`,`created`,`thread_id`, `user_account_id`, `upvotes`) VALUES (?,NOW(),?,?,?)");
	$stmt->execute(array($UserComment, $ThisPageID, $UserID,$StartingUpvotes));
    
	
}

?>