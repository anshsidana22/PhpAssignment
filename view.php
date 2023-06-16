<?php


include("data.php");
$result = mysqli_query($cser, "SELECT * FROM crud2 ORDER BY fname DESC"); // using mysqli_query instead
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">St. John School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="main.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="view.php">View my Score</a>
      
    </div>
  </div>
</nav>

<div class="container">

<h1>See Your Grades </h1>
  <table class="rwd-table">
    <tbody>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Roll No.</th>
        <th>Email</th>
        <th>Physics marks</th>
        <th>Chemistry marks</th>
        <th>Maths marks</th>
        <th>Biology marks</th>
      </tr>
    <?php 
 
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['fname']."</td>";
        echo "<td>".$res['lname']."</td>";
        echo "<td>".$res['rollno']."</td>";  
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['pmark']."</td>";
        echo "<td>".$res['cmark']."</td>";     
        echo "<td>".$res['mmark']."</td>";
        echo "<td>".$res['bmark']."</td>";
         
                
    }
    ?>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>
   