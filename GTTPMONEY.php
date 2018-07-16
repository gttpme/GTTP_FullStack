<!-- fonts are too small, its hard to locate stuff. entertainment is hard to see -->
<!-- gaming is fuzzy while the others are sharp. It stands out more -->




<?php session_start();

require_once 'config.php';

$q = $pdo->query("SELECT * FROM `thread` WHERE `subject` = 'Money' AND `Active` = 1 ORDER BY `created` DESC"); //change subject to whatever page youre on

 $Query = $q->fetchAll();

 ?>

<head>
  <title>earn cash with opinions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

  </style>
</head>

<body>

<?php require("/PHPscripts/Menu.php"); ?>

<div class="jumbotron Background-themes">
  <div class="container">
    <div class="row">
	  <div class="col-sm-2">
  <img id="Jumbotron-logo" src="Logos/Logo1Gold.png">
  </div>
  <div class="col-sm-10">
  <h1 id="jumbotronheader" class="fadeInDownLong" style="top:0%;"> Get To The Point </h1>
  <p class="fadeInDownShort"> Talk <u id="jumbotheme">Money.</u> Win prizes.</p>
  </div>
  </div>
</div>
</div>

<!-- <div class="container">
  <h1 style="padding:50px; border:3px solid rgb(25, 25, 179);"><strong> Message of the Day: </h1></strong>
</div> -->

<div class="container">
  <div class="text-center">
    <h2>This Weeks Winners</h2>
  </div>
  <div class="row border winnercontainer">
    <div class="col-sm-4 border-right winnercontainer" >
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Ibrahim Moizoos</h1>
        </div>
        <div class="panel-body">
          <p><strong>New TV</strong> </p>
        </div>
      </div> 
    </div> 
    <div class="col-sm-4 winnercontainer">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>X-wing at</h1>
        </div>
		<div class="panel-body">
		<p><strong>New T-Shirt</strong></p>
		</div>
      </div> 
    </div> 
       <div class="col-sm-4 border-left winnercontainer">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>jaxon flaxon waxon</h1>
        </div>
		<div class="panel-body">
		<p><strong>New Xbox</strong></p>
		</div>
      </div> 
    </div>  
  </div>
</div>

<div class="carousel-item">
  <img src="..." alt="...">
  <div class="carousel-caption d-none d-sm-block">
  </div>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">
<div class="container"  style="padding-top: 20px">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
		  <div><p class="carouseltimers" id="Timer1"> </p></div>
		  <a href="/Pages/<?php echo $Query[0][11]?>">
      <img src="/Pages/CommentImages/<?php echo $Query[0][10] ?>" alt="Los Angeles" <!--width="1100" height="500"-->
      <div class="carousel-caption">
        <h1 class="carousel-text"><?php echo $Query[0][4] ?></h1>
      </div>   
    </div>
    <div class="carousel-item">
	  <div><p class="carouseltimers" id="Timer2"> </p></div>
	  <a href="/Pages/<?php echo $Query[1][11]?>">
      <img src="/Pages/CommentImages/<?php echo $Query[1][10] ?>" alt="Chicago" <!--width="1100" height="500"-->
      <div class="carousel-caption" >
         <h1 class="carousel-text"><?php echo $Query[1][4] ?></h1>		 
      </div>   
    </div>
    <div class="carousel-item">
	<div><p class="carouseltimers" id="Timer3"> </p></div>
	  <a href="/Pages/<?php echo $Query[2][11]?>">
      <img src="/Pages/CommentImages/<?php echo $Query[2][10] ?>" alt="New York" <!--width="1100" height="500"-->
      <div class="carousel-caption" id="CanadianCarousel">
        <h1 class="carousel-text"><?php echo $Query[2][4] ?></h1>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" id="control-left" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" id="control-right" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<footer class="page-footer font-small darken-3 mt-4 Background-themes" >

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
          <a class="tw-ic" href="https://twitter.com/@gttp_music">
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

.carousel-control-prev-icon {
color: black;
}
#jumbotronheader {
font-size: 75px;
color: hsl(45, 100%, 50%);
 } 
 
#jumbotheme {
color: hsl(45, 100%, 50%);
text-decoration: none;
}
 
.jumbotron{
font-size: 1.5em;
color: white;

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
#CanadianCarousel{
color: green ;
}

#Jumbotron-logo {
width:  calc(280px * 0.3); 
height: calc(430px * 0.3);
}

.winnercontainer {
border:3px solid hsl(45, 100%, 50%);

}

.page-footer{
border:1px solid black;
/*background-color:hsl(0, 80%, 55%);*/
margin-left: 15px;
margin-right: 15px;
margin-top:15px;
}

.footer-copyright{
color: white;
}

.Background-themes{
Background-color: hsl(0, 100%, 0%);/*hsl(225,70%,25%) is real good*/
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
<!-- Display the countdown timer in an element -->


<script>
// Set the date we're counting down to
var countDownDate1 = new Date("<?php echo $Query[0][9]?>").getTime();
var countDownDate2 = new Date("<?php echo $Query[1][9]?>").getTime();
var countDownDate3 = new Date("<?php echo $Query[2][9]?>").getTime();



// Update the count down every 1 second
var x = setInterval(function() { calculateTime(countDownDate1,"Timer1",x); },1000);
var y = setInterval(function() { calculateTime(countDownDate2,"Timer2",y); },1000);
var z = setInterval(function() { calculateTime(countDownDate3,"Timer3",z); },1000);

function calculateTime (FutureTime,desiredElement,thisFunction) {

  convertedElement = String(desiredElement); //specify which element to change

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = FutureTime - now;

  // Time calculations for days, hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById(desiredElement).innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(thisFunction);
    document.getElementById(desiredElement).innerHTML = "EXPIRED";
  }
}
</script>

	<!--Time Left Box in top right of each debate on carousel
	MOTD above this weeks winners
Top right corner login and sign up link -->
	