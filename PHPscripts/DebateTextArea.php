


<div class= "comments-section">
  <h1>Now's your time to shine<h1>
  <h1>Give your opinion below<h1><br/><br/>
  <div class="col-sm-6 comment-create">
    <div class="form-group">
      <label for="comment">Your take:</label>
	  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <textarea class="form-control" rows="10" id="comment" style="border-width:3px;" name="comment"></textarea>
	  <button  id="SubmitCommentButton" class="btn btn-primary">Submit</button>
	  </form>
    </div>
  </div>
  <div class="posted-comments">
  
  <?php 
  //text area for user comments. This is going to be deleted and handled by an AJAX function in the near future.
  
  
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$UserComment = $_POST['comment'];
	$StartingUpvotes = 0;
	
    $stmt = $pdo->prepare("INSERT INTO `post` (`content`,`created`,`thread_id`, `user_account_id`, `upvotes`) VALUES (?,NOW(),?,?,?)");
	$stmt->execute(array($UserComment, $ThisPageID, $UserID, $StartingUpvotes));
    
	
}



 
?>
	
  </div>
</div>


