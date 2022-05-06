<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'crudyoutube';

$con = mysqli_connect($server,$username,$password,$db);
if($con){
    // echo "connection sucessful";
    ?>
    <script>
       alert("connection sucessful");
    </script>
    <?php

} else {
    "no connection";
}
?>