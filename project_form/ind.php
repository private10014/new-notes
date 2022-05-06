<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title> 
  <?php include 'links.php' ?>
</head>
<body>
  <center>
<h1>Apply for developer post</h1>
<form action="" method="POST">

  <input type="text" name="user" placeholder="enter your name">
  <input type="text" name="degree" placeholder="enter your qualication">
  <input type="text" name="mobile" placeholder="mobile number">
  <input type="text" name="email" placeholder="email id">
  <input type="text" name="refer" placeholder="any refrences">
  <input type="text" name="jobprofile" placeholder="web developer"><br>
  <input type="submit" name="submit" value="registrer">
  <a href="display.php">check form</a>
</form>
</center>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])) {
  $name = $_POST['user'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobprofile = $_POST['jobprofile'];

$insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$email','$refer','$jobprofile')";
$res = mysqli_query($con,$insertquery);
if ($res){
  ?>
  <script>
    alert("data inserted properly");
  </script>
  <?php
}else {
  ?>
  <script>
    alert("data not inserted");
  </script>
  <?php

}

}
?>