<?php

session_start();
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'root', '','wt_project');

// get the post records
$myRoll = $_POST['myRoll'];
$myName = $_POST['myName'];
$myEmail = $_POST['myEmail'];
$myMob = $_POST['myMob'];
$myAbout = $_POST['myAbout'];
$myDob = $_POST['myDob'];
$myCgpa = $_POST['myCgpa'];

$_SESSION['roll']= $myRoll;
$_SESSION['name']= $myName;
$_SESSION['dob']= $myDob;
$_SESSION['cgpa']= $myCgpa;
$_SESSION['email']= $myEmail;
$_SESSION['mob']= $myMob;
$_SESSION['about']= $myAbout;

// echo $myName;
// echo $myEmail;

// database insert SQL code
$sql = "INSERT INTO `student` (`Roll`, `Name`, `Email`, `Mobile`, `About`, `Cgpa`, `Dob`) VALUES ('$myRoll', '$myName', '$myEmail', '$myMob', '$myAbout', '$myCgpa', '$myDob')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	$_SESSION['InsertStatus'] = 1;
	header("Location: ./StudInserted.php");

}
else
{
	$_SESSION['InsertStatus'] = 1;
	header("Location: ./StudentForm.php");
}
?>