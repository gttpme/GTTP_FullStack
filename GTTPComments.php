<?php

session_start();

require_once 'config.php';




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
  <script type="text/javascript" src="../Javascript/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="../Javascript/Jqueryscript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.side-1-comment {
background-color: #8080ff;
border-radius: 15px;
}

.side-2-comment {
background-color: #b30000; 
border-radius: 15px;
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

  </style>
</head>

<body>


<?php require("/PHPscripts/Menu.php"); ?>


<div class="jumbotron Background-themes">
  <div class="container">
    <div class="row">
	  <div class="col-sm-4 sides-containers" id="side-1-container">
		<!--container for the first side of the argument (blue)-->
		<div class="side-1-comment" id="sides">
			<h1>Side 1</h1>
			<p>Pusha T fried him</p><br/>
			<p> Tell us why you think so below <p>
		</div>

		<!--container for the other side of the argument (red)-->
      </div>
      <div class="col-sm-4 sides-containers" id="side-2-container">
	  
		<div class="side-2-comment" id="sides">
			<h1>Side 2</h1>
			<p>pusha T sucks!</p><br/>
			<p> Tell us why you think so below  <p>
			
		</div>		
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_SESSION['username'])) {

require("/PHPscripts/DebateTextArea.php");
}
else {
echo '<p>You need to log in before commenting, Youngblood! </p>';
}
 ?>

 
 <?php 
 
 //$sql = "SELECT `CONTENT` FROM `post` ORDER BY RAND() LIMIT 5;"
 
 $q = $pdo->query("SELECT `CONTENT`,`id` FROM `post` ORDER BY RAND() LIMIT 5");
 $r = $q->fetchAll();
 
 //var_dump($r);
 
 //echo "<p> " .$r . "</p>";
 
 //$stmt = mysqli_prepare($link, $sql);
 
 //if(mysqli_stmt_execute($stmt)){
//	 mysqli_stmt_store_result($stmt);
 
 
 
 for($i = 0; $i<5; $i++) {
	 
	 
 echo   '<div class="posted-comments">
 <p class="comment-text" id="top-comment"> <span class="UpvoteIcon"> <i class="fa fa-arrow-circle-up" id=' .$r[$i][1] .' ></i></span> ' . $r[$i][0] . '</p>	
  </div>
</div>';
 }
 
?>


<footer class="page-footer font-small darken-3 mt-4 Background-themes" id="page-footer">

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





<style type="text/css">


.UpvoteIcon {
     cursor: pointer;
	 
}




.side-1-comment {
background-color: #8080ff;
border-radius: 15px;
}

.side-2-comment {
background-color: #b30000; 
border-radius: 15px;
}

.side-1-comment:hover {
background-color: #9999ff;
}

.side-2-comment:hover {
background-color: #ff0000;
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
//Background-color: hsl(225, 70%, 25%); commenting this out to get default grey

}

#carousel-left {
  margin-left: 25px;
}

#carousel-right {

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

</body>
