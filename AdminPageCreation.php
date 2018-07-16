<?php

session_start();

require_once 'config.php';

//this page will be used by admins to create new debate pages.


//if($_SESSION['admin']){
	



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
  <script type="text/javascript" src="/Javascript/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="/Javascript/Jqueryscript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- datetime picker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
  
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

<h1> Create New Debate Page </h1>


<form action="/PHPscripts/SubmitPageCreation.php" method="post" enctype="multipart/form-data">

<div class="form-group">
  <label  for="SelDebateCategory">Select Category:</label>
    <select class="form-control" id="SelDebateCategory" name="Category">
	  <option>Sports</option>
	  <option>Music</option>
	  <option>Cuisine</option>
	  <option>Entertainment</option>
	  <option>Gaming</option>
	  <option>Money</option>
	</select>
</div>

<div class="form-group">
  <label for="SelDebateCategory"> Select Debate Thread: (1:Daily,2:Daily,3:Weekly) </label>
    <select class="form-control" id="SelDebateCategory" name="ThreadValue">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	</select>
</div>
	


  <div class="form-group">
    <label for="ChooseBackgroundImage"> <h3> Choose Background Image </h3> </label>
	<input type="file" class="form-control-file" id="ChooseBackgroundImage" name="BackgroundImage">
	</div>
	
  <div class="form-group">
    <label for="Debate Title"><h3>Debate Title</h3></label>
    <textarea class="form-control" name="DebateTitle" id="Debate Title" rows="1"></textarea>
  </div>
  
    <div class="form-group">
    <label for="Debate Info"><h3>Debate Info</h3></label>
    <textarea class="form-control" name="DebateInfo" id="Debate Info" rows="3"></textarea>
  </div>
	
	<div class="container">
	<div class="row">
	
  <div class="form-group col-sm-6">
    <label for="Side 1"><h3>Side 1</h3></label>
    <textarea class="form-control" name="Side1" id="Side 1" rows="1"></textarea>
  </div>
  
   <div class="form-group col-sm-6">
    <label for="Side 2"><h3>Side 2</h3></label>
    <textarea class="form-control" name="Side2" id="Side 2" rows="1"></textarea>
  </div>
  </div>
  </div>
  
  
 
  
  
<div class="container">
	 <h3> Enter Expiration Date </h3>
    <div class="row">

        <div class="col-sm-6">
            <div class="form-group">
                <div  class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input name="Expiration" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
				format : 'YYYY/MM/DD HH:mm:ss'
				});
            });
        </script>
    </div>
</div>

<button type="Submit" class="btn btn-primary">Create</button>

  </form>
  </body>







</body>