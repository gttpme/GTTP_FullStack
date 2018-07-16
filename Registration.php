
<?php

//this is the page used for registering new users. It currently uses mysqli statements
//because at the time I didn't know about PDO's. switching this page over to a PDO is on the to-do list


SESSION_START();
//process form data when form has been submitted
require_once 'config.php'; 

$username = "";
$password = "";
$confirm_password = "";

$username_err = $password_err = $confirm_password_err = ""; 

$email = "";
$confirm_email = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//validate username
	  if(empty(trim($_POST["username"]))){ //trim will remove the whitespace
	    $username_err = "username is required";
	  } else{ //if a valid username has been entered then prepare a SELECT statement
	  
	    $sql = "SELECT id FROM accounts WHERE username = ?"; //not sure what this is doing
		  
		  if($stmt = mysqli_prepare($link, $sql)) {
			  //bind variables to the prepared statement
			  mysqli_stmt_bind_param($stmt, "s", $param_username);
			  
			  //set parameters
			  
			  $param_username = trim($_POST["username"]);
			  
			 
			 // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // store result 
                mysqli_stmt_store_result($stmt);
                
				//check to see if username has been taken
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
		        // Close statement
        mysqli_stmt_close($stmt);
    }
		//email statement -----------------
		
	 if(empty(trim($_POST["email"]))){ //trim removes whitespace and other predefined characters from both sides of a string
	    $email_err = "email is required";
	  } else{ //if a valid username has been entered then prepare a SELECT statement
	  
	    $sql = "SELECT id FROM accounts WHERE email = ?"; //not sure what this is doing
		  
		  if($stmt = mysqli_prepare($link, $sql)) {
			  //bind variables to the prepared statement
			  mysqli_stmt_bind_param($stmt, "s", $param_email);
			  
			  //set parameters
			  
			  $param_email = trim($_POST["email"]);
			  
			 
			 // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // store result 
                mysqli_stmt_store_result($stmt);
                
				//check to see if email has been taken
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already in use.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
	 if(empty(trim($_POST["confirmemail"]))){
        $confirm_password_err = 'Please confirm email.';     
    } else{
        $confirm_email = trim($_POST['confirmemail']);
        if($email != $confirm_email){
            $confirm_email_err = 'emails do not match.';
        }
    }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "password required";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirmpassword"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirmpassword']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)&& empty($confirm_email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO `accounts` (`username`, `password`,`email`) VALUES (?,?,?)";
		//INSERT INTO `accounts`(`username`, `email`, `password` ) VALUES ('exloser','skytrobbins@gmail.com','spoonman')
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password,$param_email);
           
						
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later. @end";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<head>
  <title>earn cash with opinions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> -->
  
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>

  
<?php require("/PHPscripts/Menu.php"); ?>

  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-dark" >
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


<div class="container" id="register-container" style="margin-left:0; margin-top: 5px">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<!--  <div class="rows">
    <div class="col-xs-6"> -->
  <div class="form-group">
    <label for="username">Create Username</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="email">E-mail Address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter E-mail Address">
  </div>
  <div class="form-group">
    <label for="confirmemail">Confirm E-mail Address</label>
    <input type="email" class="form-control" name="confirmemail" placeholder="Confirm E-mail Address">
  </div>
  
   <div class="form-group">
    <label for="password">Create Password</label>
    <input type="password" class="form-control" name="password" placeholder="New Password">
  </div>
  
   <div class="form-group">
    <label for="ConfirmPassword">Confirm Password</label>
    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
  </div>
  <div class="container">
   <div class="row">
   <div class="col-sm-8" style="padding-left:0; padding-right: 0px;">
   <div class="form-group">
    <label for="City">City</label>
    <input type="text" class="form-control" name="EnterCity" placeholder="(optional)">
  </div>
  </div>
  
  <div class="col-sm-4" style="padding-right: 0;">
   <div class="form-group">
    <label for="State">State</label>
    <input type="text" class="form-control" name="EnterState" placeholder="(optional)">
  </div>
  </div>
  </div>
 </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Stay Signed In</label>
  </div>
  <button type="submit" class="btn btn-primary" style="margin:10px">Submit</button>
  </div>
</form>

<style>

  body {
font-family: 'Oswald', sans-serif;
}

.navbar {
background-color:hsl(210, 10%, 35%);
}

</style>











</body>