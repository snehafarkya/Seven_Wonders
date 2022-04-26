<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_php</title>
    <link rel="icon" href="../navbar/logo.ico" type="image/x-icon">
</head>
<body>

<?php

echo "<script>alert('Your response has been collected');</script>";

?>
<?php 
include 'contact.html';
error_reporting(E_ALL ^ E_WARNING);
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "phpwebsite";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
      echo "";
}
$usname = $_POST['uname'];
$usemail = $_POST['uemail'];
$msg = $_POST['msg']; 
$rate= $_POST['rating1'];

$sql = "insert into contactus values('$usname','$usemail','$msg','$rate');";
$result = mysqli_query($conn,$sql);

?>
<?php  ?>

</body>
</html>