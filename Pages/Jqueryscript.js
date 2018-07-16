

$(document).ready(function(){
	$(".comments-section").hide(); //hide comment text area until user has made a choice
	 var beenClicked = false;
	 var UsersSide;

	 //use will select a side and the opposing side will fade out.
	 //The two side containers are used as the two primary colors for the webpage.
	 //on selecting a side, the border of the text-area will highlight the respective
	 //color to remind users which they selected.
	$("#side-1-container").click(function(){
		$("#side-2-container").fadeOut("slow");
		$(".comments-section").delay(500).slideDown("slow");
		$(".comments-section").delay(1000).fadeIn("slow");
		$("#comment").css("border-color",$(".side-1-comment").css("background-color"));
		console.log($(".side-1-comment").css("background-color"));
		console.log("clicked");
		UsersSide = 1;
		
	});	
	$("#side-2-container").click(function(){
		$("#side-1-container").fadeOut("slow");
		$(".comments-section").delay(500).slideDown("slow");
		$(".comments-section").delay(1000).fadeIn("slow");
		$("#comment").css("border-color",$(".side-2-comment").css("background-color"));
		UsersSide = 2;
	});
    $(".UpvoteIcon i").click(function() {
	    // $.ajax({url: "upvoted.php",type:"POST", data: {'value=' + $(this).attr('id')}
	    $.post('Upvoted.php', 'val=' + $(this).attr("id"), function (response) {
			alert(response)
		});
	 
   });
   

   });
   
    /* 
	$("#SubmitCommentButton").click(function () {
	$.post('SubmitComment.php', 'comment=' $('#comment').val(), function (response) {
		alert(response)
	});
	});
});

*/


