<?php
session_start();
$_SESSION
?>
<?php
// collecting data from the register page



//print_r($_POST);

$errorCount = 0;
$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$larst_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$department = $_POST['department'];

$errorArray = [];

//verifying the data and validate
if($errorCount > 0){
    $_SESSION["error"] = "You have " . $errorCount . " Error(s) in your submission";
    header("Location: register.php");

    //header("Location: register.php?message=Something went wrong with your submission");
}else{
    echo "Registration Successful";  
    }


/* 
 if($first_name == "") {
    $errorArray = "First Name cannot be blank";
}

if($last_name == "") {
    $errorArray = "Last Name cannot be blank";
}

*/

//saving data

//return back to the page
?>
