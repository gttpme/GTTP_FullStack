<?php


//this script creates a new webpage using a template provided in the source code. 
//admins fill out the forms in admincreationpage.php and the data is used to create a new comment page




Session_Start();

require_once '../config.php';


$UserID = $_SESSION['user_account_id'];


if($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $Category = $_POST['Category'];
  $TimeStamp = ("NOW()");
  $ThreadValue = $_POST['ThreadValue'];
  $BackgroundImage = $_FILES['BackgroundImage']['name'];
  $Expiration = $_POST['Expiration'];
  $Active = 1;
  $DebateTitle = $_POST['DebateTitle'];
  $Side1 = $_POST['Side1'];
  $Side2 = $_POST['Side2'];
  var_dump($_POST);
  $DebateInfo = $_POST['DebateInfo'];
  
  $MusicTemplate = "C:\wamp64\www\ArduinoProjv2\Templates\GTTPCommentsMusic.php";
  $SportsTemplate = "C:\wamp64\www\ArduinoProjv2\Templates\GTTPCommentsSports.php";
  $MoneyTemplate = "C:\wamp64\www\ArduinoProjv2\Templates\GTTPCommentsMoney.php";
  $CuisineTemplate = "C:\wamp64\www\ArduinoProjv2\Templates\GTTPCommentsFood.php"; 
  $GamingTemplate = "C:\wamp64\www\ArduinoProjv2\Templates\GTTPCommentsGaming.php";
  $EntertainmentTemplate = "C:\wamp64\www\ArduinoProjv2\Templates\GTTPCommentsEntertainment.php";
  $PagePath = "C:\wamp64\www\ArduinoProjv2\Pages";


$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //convert Debate title to a clean url
	setlocale(LC_ALL, 'en_US.UTF8');

	function toAscii($str, $replace=array(), $delimiter='-') {
	if( !empty($replace) ) {
		$str = str_replace((array)$replace, ' ', $str);
	}

	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("~[^a-zA-Z0-9/_|+ -]~", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace('~[/_|+ -]+~', $delimiter, $clean);

	return $clean;
}

    $CleanUrl = toAscii($DebateTitle, ' ');


  	$success=$stmt = $pdo->prepare("INSERT INTO `thread`  (`subject`,`created`, `Active`, `DebateTitle`, `Side 1`, `Side 2`, `DebateInfo`,`user_account_id`, 
  `Expiration`, `Image`,`CommentUrl`) VALUES(?,NOW(),?,?,?,?,?,?,?,?,?)");
	$stmt->execute(array($Category,$Active, $DebateTitle, $Side1, $Side2, $DebateInfo, $UserID, $Expiration, $BackgroundImage, $CleanUrl));
	
	print_r($pdo->errorInfo());
	
	$NewURL = 'C:/wamp64/www/ArduinoProjv2/Pages/' . $CleanUrl . '.php'; //this had strip slashes before. if it breaks this is why!
   
   echo $NewURL;

   
   switch($Category) { //this statement will find what category template to use
	   case "Music":
	   
	   copy($MusicTemplate, $NewURL);
	   
	   break;
	   
	   case "Sports":
	   
	   copy($SportsTemplate, $NewURL);
	   
	   break;
	   
	   case "Gaming":
	   
	   copy($GamingTemplate, $NewURL);
	   
	   break;
	   
	   case "Entertainment":
	   
	   copy($EntertainmentTemplate, $NewURL);
	   
	   break;
	   
	   case "Cuisine":
	   
	   copy($CuisineTemplate, $NewURL);
	   
	   break;
	   
	   case "Money":
	   
	   copy($MoneyTemplate, $NewURL);
	   
	   break;
	   
   }
	     
		 /******************File Upload**********************/
		 
}	 
		 
		

	$target_dir = "C:/wamp64/www/ArduinoProjv2/Pages/CommentImages/";
$target_file = $target_dir . basename($_FILES["BackgroundImage"]["name"]);
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["BackgroundImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
var_dump($_FILES);
// Check file size
if ($_FILES["BackgroundImage"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "jfif" ) {
    echo "Sorry, only JPG, JPEG, JFIF, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["BackgroundImage"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["BackgroundImage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



	  ?>