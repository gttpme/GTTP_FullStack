<?php

session_start();

require_once '../config.php';



$ThisFile = chopExtension(__FILE__); // find name of file to use in query

$q = $pdo->query("SELECT * FROM `thread` WHERE `CommentUrl` = '$ThisFile'  ORDER BY `created` DESC"); //change subject to whatever page youre on

 $Query = $q->fetchAll();
 
 $UserID = $_SESSION['user_account_id'];
 $ThisPageID = $Query[0][0]; 
 
//var_dump($Query);

 function chopExtension($filename) {
    return pathinfo($filename, PATHINFO_FILENAME);
}


 
?>

<head>
  <title>earn cash with opinions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
 <!--  <script type="text/javascript" src="../Javascript/jquery-3.3.1.js"></script> -->
  <script type="text/javascript" src="Jqueryscript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
/*these media queries will adjust the size of the carousel to best fit
the browser window*/
	  
	  @media only screen and (max-width: 959px) {}

/* Tablet Portrait size to standard 960 (devices and browsers) */
@media only screen and (min-width: 768px) and (max-width: 959px) {}

/* All Mobile Sizes (devices and browser) */
@media only screen and (max-width: 767px) {}

/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
@media only screen and (min-width: 480px) and (max-width: 767px) {}

/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 479px) {}
  }
  
  body {
font-family: 'Oswald', sans-serif;
}

.sides-containers {
text-align: center;
border-radius: 15px;
border-color: hsl(225, 70%, 25%);
margin: 15px;

}

.row{
justify-content: center;
}


.side-1-comment:hover {
background-color: #9999ff;
}

.side-2-comment:hover {
background-color: #ff0000;
}

.btn-primary {
background-color:hsl(225, 70%, 25%);
border-color: none
}

.img-info-container {
display: flex;
}

#debate-info {
color: black;
}

#debate-img {
border: 5px solid black;
max-width: 600px;
height: auto;
}

.jumbo-container {
margin: none;
}


#img-subtext {
color: black;
}

  </style>
  
  <style type="text/css">


.side-1-comment {
background-color: hsl(285, 100%, 35%) ;
border-radius: 15px;
}

.side-2-comment {
background-color: white; 
border-radius: 15px;
}

.side-1-comment:hover {
background-color:hsl(285, 100%, 35%) ;
}

.side-2-comment:hover {
background-color: white ;
}


.comment-text{
margin-left: 8px;
font-size: 16px;
padding: 8px;
}

#top-comment{
border-style: solid;
border-width: 1px 1px 1px 5px;
border-left-color: lightgray;
}

.border {

	border: 2px solid black;
}

.carousel-control-prev-icon {
color: black;
}
#jumbotronheader {
font-size: 75px;
 } 
.jumbotron{
font-size: 1.5em;


}
.navbar {
background-color:hsl(210, 10%, 35%);
}

.carouseltimers {
position: absolute;
top: 0;
right: 0%;
color: white;
font-size: 40px;
text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
/*border-left: 2px solid;
border-bottom: 2px solid; 
background-color: rgba(70,35,255,0.5); 
border-color: black; */
}

.carousel-text {
text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

#Jumbotron-logo {
width:  calc(280px * 0.3); 
height: calc(430px * 0.3);
}

.winnercontainer {
border:3px solid rgb(25, 25, 179);

}

.page-footer{
border:1px solid black;
/*background-color: hsl(0, 0%, 65%);*/
margin-left: 15px;
margin-right: 15px;
margin-top:15px;
}

.footer-copyright{
color: white;
}

.Background-themes{
Background-color: (249,249,249)
; /*hsl(225,70%,25%) is real good*/
}

#carousel-left {
  margin-left: 25px;
}



/* key frames */
@-webkit-keyframes fadeInDownLong{ 
  from {
    opacity:0;
    transform: translateY(-40px);
	}
  to {
    opacity: 1;
	transform: translateY(0); 
	} 
  }

.fadeInDownLong{
opacity:0;

-webkit-animation:fadeInDownLong ease-in 1;
 -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation
  is done we remain at the last keyframe value (opacity: 1)*/
-webkit-animation-duration:1.4s;
}

.fadeInDownShort{
-webkit-animation:fadeInDownLong ease-in 1;
 -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation
  is done we remain at the last keyframe value (opacity: 1)*/
-webkit-animation-duration:1.4s;
}

</style>

</head>

<body>


<?php require("../PHPscripts/Menu.php"); ?>


<div class="jumbotron Background-themes">
  <div class="jumbo-container">
    <div class="row">
	  <div class="col-sm-4 sides-containers" id="side-1-container">
		<!--container for the first side of the argument (blue)-->
		<div class="side-1-comment" id="sides">
			<h1 style="color: white"><?php echo $Query[0][5]; ?></h1>
		</div>
		<!--container for the other side of the argument (red) -->
      </div>
      <div class="col-sm-4 sides-containers" id="side-2-container">
	  
		<div class="side-2-comment" id="sides">
			<h1 style="color: hsl(285, 100%, 35%)"><?php echo $Query[0][6]; ?></h1>
			
		</div>		
      </div>
    </div>
	<div class="img-info-container">
		<div class="col-sm-6 img-container">
			<img id="debate-img" src="CommentImages/<?php echo $Query[0][10]; ?>" alt="Tony Snell">
			<h5 id="img-subtext" ><?php echo $Query[0][4]; ?><h5>
		</div>
		<div class="col-sm-6 info-container">
			<h4 id="debate-info"><?php echo $Query[0][7]; ?></h3>
		</div>
	</div>
  </div>
</div>

<?php 
if(isset($_SESSION['username'])) {

require("../PHPscripts/DebateTextArea.php");

}
/*else {
echo "<p>You don't seem to be signed in!<a href="Registration.php"> You can do that here</a>";
}*/
 ?>
 

 
 <?php 
 
 $StatementQueries = $pdo->query("SELECT `CONTENT`,`id`,`side` FROM `post` WHERE thread_id = $ThisPageID  ORDER BY RAND() LIMIT 5;");
  //$NumComments = $pdo->query("SELECT `CONTENT` FROM `post` WHERE thread_id = $ThisPageID  ORDER BY RAND() LIMIT 5;") -> fetchColumn();
 $UserComments = $StatementQueries->fetchAll();
 $NumComments = $StatementQueries->rowCount();


 
 
 
 if ($NumComments >= 1) {
 for($i = 0; $i<count($UserComments); $i++) {
 echo   '<div class="posted-comments">
	<p class="comment-text ' . $UserComments[$i][1] .'  id="top-comment"><span class="UpvoteIcon"> <i class="fa fa-arrow-circle-up" id=' . $UserComments[$i][1] .' ></i></span> ' . $UserComments[$i][0] . '<p>	
  </div>
</div>';

 }
 }
 else {
	 echo "There aren't any comments yet!";
 }
 
?>

<script>

var CommentData

//figure out which comments are on what side and style accordingly.
//it takes the query 
var CommentSide = <?php echo  $UserCommentsJson = json_encode($UserComments); ?>;

for(i=0; i<CommentSide.length;i++) {
	if(CommentSide[i]['side'] == 1) {
		var CommentId= CommentSide[i]['id'];
		var PageColor1 = $('.side-1-comment').css('background-color');
		var CommentSideColor = ("3px solid " + PageColor1);
		$("." + CommentSide[i]['id']).css('border', CommentSideColor);
		console.log($('.side-1-comment').css('background-color'));
		console.log(CommentSideColor);
	}
	else if(CommentSide[i] == 2) {
		var CommentId= CommentSide[i]['id'];
		var PageColor1 = $('.side-2-comment').css('background-color');
		var CommentSideColor = ("3px solid " + PageColor1);
		$("." + CommentSide[i]['id']).css('border', CommentSideColor);
		console.log($('.side-2-comment').css('background-color'));
		console.log(CommentSideColor);
}
    else {
		$("." + CommentSide[i]['id']).css('border', '3px solid black');
	}

}
</script>





<footer class="page-footer font-small darken-3 mt-4 Background-themes" id="page-footer" >

  <!-- Footer Links -->
  <div class="container" >

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5" align="center">

          <!-- Facebook --> 
          <a class="fb-ic" href="https://www.facebook.com/Gettothepointalready/">
            <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="https://twitter.com/@gttp_sports">
            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

          <!--Instagram-->
          <a class="ins-ic"  href="https://www.instagram.com/gettothepoint_sports/">
            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
		  
		  <!--
		  <a class="sc-ic">
            <i class="fa fa-snapchat fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          -->
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark ">© 2018 Copyright:
    <a href="http://73.26.238.133"> Gettothepointdebates.com</a>
  </div>
  <!-- Copyright -->

</footer>


  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id="LoginModalLabel" style="color: white;">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" class="form-control" id="UsernameModal" placeHolder="Username">
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>







</body>
