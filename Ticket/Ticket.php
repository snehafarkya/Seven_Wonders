<?php

include "TTicket.html";
   $hostname = "localhost";
   $userid = "root";
   $pass = "sneha";
   $dbname = "ticket";
   $conn = new mysqli($hostname,$userid,$pass,$dbname);
   
   if(!$conn){
       echo "error in getting connection";
   }
   else{
         echo "";
   }
   $source = $_POST['source'];
   $dest = $_POST['destination'];
   $date = $_POST['date']; 
  
    $sql = "insert into getticket values('$source','$dest','$date');";
    $result = mysqli_query($conn,$sql);
   
//    $sel = "Select * from entry";
//    $res = mysqli_query($conn,$sel);



?>

<?php
if(isset($_POST['submit'])){
    if($dest == 'A'){
      echo "<div class='imagee'><img src='Ticket-1.png'></div>";

    echo "<h2> $source </h2>";
    }

else{
    echo "<h2>Insert a valid destination</h2>";
}
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

.imagee{
    position:absolute;
    top:900px;
    left:24%;
    width: 800px;
    height: 400px;
}
h2{
    position: absolute;
    top:1141px;
    left:28%;
    font-size:30px;
    color: ##363337;
    font-family: 'Bebas Neue', cursive;
}
    </style>