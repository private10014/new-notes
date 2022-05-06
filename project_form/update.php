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
<?php
include 'connection.php';
$ids = $_GET['id'];
$showquery = "select * from jobregistration where id={$ids}";
$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);
if(isset($_POST['submit'])) {
  $idupdate = $_GET['id'];
  $name = $_POST['user'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobprofile = $_POST['jobprofile'];

// $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$email','$refer','$jobprofile')";
$query = " update  jobregistration set id=$ids, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobprofile' where id=$idupdate";
$res = mysqli_query($con,$query); 
if ($res){
  ?>
  <script>
    alert("data updated properly");
  </script>
  <?php
}else {
  ?>
  <script>
    alert("data not updated");
  </script>
  <?php

}

}
?>

  <input type="text" name="user" placeholder="enter your name" value="<?php echo $arrdata['name'] ?>">
  <input type="text" name="degree" placeholder="enter your qualication" value="<?php echo $arrdata['degree'] ?>">
  <input type="text" name="mobile" placeholder="mobile number"  value="<?php echo $arrdata['mobile'] ?> ">
  <input type="text" name="email" placeholder="email id" value="<?php echo $arrdata['email'] ?> ">
  <input type="text" name="refer" placeholder="any refrences" value="<?php echo $arrdata['refer'] ?> ">
  <input type="text" name="jobprofile" placeholder="web developer" value="<?php echo $arrdata['jobpost'] ?> "><br>
  <input type="submit" name="submit" value="UPDATE">
  <a href="display.php">check form</a>
</form>
</center>
</body>
</html>

















