<?php session_start(); ?>

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

<div class="jumbotron">
 <!-- <div class="container">
    <div class="row">
	  <div class="col-sm-2"> -->
  <div class="container">
    <div class="row justify-content-center">
	<h1> Find Your Debates Below To Get Started </h1>
    </div>
	<div class="row justify-content-center">
		<p style="font-size: 25px;"> Win Prizes with your opinion </p>
	</div>
	<div class="row justify-content-center">
	    <p><span class="glyphicons glyphicons-circle-arrow-down"></span></p>   
	</div>
	</div>
  </div>
  <!--
  <div class="col-sm-10">
  <h1 id="jumbotronheader"> Get To The Point </h1>
  <p> Talk sports. Win prizes. </p>
  </div>
  
  </div>
</div>
</div> -->

<div class="container" >
  <div class="row justify-content-center" >
    <div class="col-xs-4 p-2 OurThemes" id="sports">
	 <a href="/GTTPSports.php">
	  <div>
	<img class ="img-responsive" src="/HomePageIcons/GTTPSportsHome.png" style="border-radius:20px;">
	</div>
	</a>
	</div>
    <div class="col-xs-4 p-2 OurThemes" id="music">
	<a href="/GTTPMusic.php">
	<img class ="img-responsive" src="/HomePageIcons/GTTPMusicHome.png" style="border-radius:20px;">
	</div>
	<div class="col-xs-4 p-2 OurThemes">
	 <a href="/GTTPFood.php">
	<img class ="img-responsive" src="/HomePageIcons/GTTP_food2.png" id="food">
	</div>
	</a>
  </div>
  <div class="row justify-content-center" >
  
  
    <div class="col-xs-4 p-2 OurThemes" id="entertainment">
	 <a href="/GTTPEntertainment.php">
	<img src="/HomePageIcons/GTTPEntertainmentHome.png" style="border-radius:20px;">
	
	</div>
	<div class="col-xs-4 p-2 OurThemes" id="gaming">
	<a href="/GTTPGaming.php">
	<img class ="img-responsive" src="/HomePageIcons/GTTPGamingHome.png" href="/GTTPsports.html" id="gaming">
	
	</div>
	
	<div class="col-xs-4 p-2 OurThemes" id="money">
	<a href="/GTTPMoney.php">
	<img class ="img-responsive" src="/HomePageIcons/GTTPMoneyHome.png" style="border-radius:20px;">
	</div> 
	</a>
  </div>	
</div>

</body>

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
	  0

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark ">© 2018 Copyright:
    <a href="http://73.26.238.133"> GTTPdebates.com</a>
  </div>
  <!-- Copyright -->

</footer>

<style type="text/css">

@-webkit-keyframes OnMouseOver{ 
  from {
    transform: width(300px);
	transform: height(300px);
	}
  to {
	 transform: width(320px);
	transform: height(320px);
	} 
  }
.OnMouseOver{

-webkit-animation:OnMouseOver ease-in 1;
 -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation
  is done we remain at the last keyframe value (opacity: 1)*/
-webkit-animation-duration:1s;
}

.navbar{
background-color:#343a40
}
  
.OurThemes {

 }
 
 
 #sports {
 border-radius:5px;
 }
 
 /*#sports:hover {
 width: 330;
 height: 330;
 }*/

 #food {
 border-radius: 20px;
 background-color:hsl(125, 45%, 45%);
 }
 
 /*#food:hover {
  width: 330px;
  height: 330px;
 }*/
 

 #foodcol {
 border-radius: 20px;
 }

 .vertical-center {
 display: flex;
 align-items: center;
 }
 
/*.jumbotron{
background-image: url("Logo1.png");
opacity:0.5;
} */

  #entertainment {
 /* padding-top:20px;
  border-radius: 20px;
  background-color: hsl(270, 75%, 70%);
  
  width:300px;
  height:300px;
  */
  
  border-radius: 20px;
  
  
  }
  
   #gaming {
 border-radius: 20px;
 /*background-color:hsl(125, 45%, 45%);*/
 }

 
.footer-copyright{
color: white;
}



</style>