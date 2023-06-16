<?php
//including the database connection file
include("config.php");
if(isset($_POST['Submit'])) {    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$rollno = $_POST['rollno'];
$email = $_POST['email'];
$pmark = $_POST['pmark'];
$cmark = $_POST['cmark'];
$mmark = $_POST['mmark'];
$bmark = $_POST['bmark'];

$result = mysqli_query($cser, "INSERT INTO crud2 (fname,lname,rollno,email,pmark,cmark,mmark,bmark) VALUES('$fname','$lname','$rollno','$email','$pmark','$cmark','$mmark','$bmark')");

header("location:view.php");


}
?>