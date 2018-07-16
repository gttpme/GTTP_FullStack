

$(document).ready(function(){
	$(".comments-section").hide();
	 var beenClicked = false;

	$("#side-1-container").click(function(){
		$("#side-2-container").fadeOut("slow");
		$(".comments-section").delay(500).slideDown("slow");
		$(".comments-section").delay(1000).fadeIn("slow");
	});	
	$("#side-2-container").click(function(){
		$("#side-1-container").fadeOut("slow");
		$(".comments-section").delay(500).slideDown("slow");
		$(".comments-section").delay(1000).fadeIn("slow");
	});
	$('.UpvoteIcon').click(function(){ //change color of upvote button on click
		if(beenClicked == false) {
			$(this).css("color","red");
			beenClicked = true;
			console.log(beenClicked);
		}
	});
    $(".UpvoteIcon i").click(function() {
	    // $.ajax({url: "upvoted.php",type:"POST", data: {'value=' + $(this).attr('id')}
	    $.post('Upvoted.php', 'val=' + $(this).attr("id"), function (response) {
			alert(response)
		});
	 
   });
     
	$("#SubmitCommentButton").click(function () {
	$.post('SubmitComment.php', 'comment=' $('#comment').val(), function (response) {
		alert(response)
	});
	});


});
