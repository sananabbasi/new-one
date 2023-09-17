<?php

session_start();

$user_email = $_POST['useremail'];
$user_password = $_POST['userpassword'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user6";
$errors = [];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$duplicate=mysqli_query($conn,"select * from pinterstsingup where email='$user_email' ");
if (mysqli_num_rows($duplicate)>0)
{
  $errors['email'] = 'This Email Already Exist' ;
}




if(empty($user_email))
{
    $errors['email'] = 'Enter you email' ;
    
} 

if(strlen($user_password) < 8  || empty($user_password))
{
    $errors['password'] = 'check your password';
    
}

if(!empty($errors)){
   $_SESSION['seesionerrors'] = $errors;


header('Location: index.php#bgimage'); 
}



$ency_pass = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);

// prepare and bind
$sql = $conn->prepare("INSERT INTO pinterstsingup (email, password, dob ) VALUES (?, ?, ?)");
$sql->bind_param("sss", $_POST["useremail"], $ency_pass, $_POST["dobirth"]);



$sql->execute();

$conn->close();



?>


