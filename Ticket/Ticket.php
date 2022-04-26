<?php
 error_reporting(E_ALL ^ E_WARNING);
include "TTicket.html";
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
   $source = $_POST['source'];
   $dest = $_POST['destination'];
   $date = $_POST['date']; 
  
    $sql = "insert into ticketinfo values('$source','$dest','$date');";
    $result = mysqli_query($conn,$sql);
   
//    $sel = "Select * from entry";
//    $res = mysqli_query($conn,$sel);



?>

<?php
if(isset($_POST['submit'])){
    if($dest == 'A'){
      echo "<div class='imagee'><img src='./tickets/Taj Mahal.png'></div>";

    echo "<h2> $source </h2>";
    echo "<h3> $date </h3>";
    }

else if($dest == 'B'){
    echo "<div class='imagee'><img src='./tickets/CHRIST THE REDEEMER.png'></div>";

  echo "<h2> $source </h2>";
  echo "<h3> $date </h3>";
  }
  else if($dest == 'C'){
    echo "<div class='imagee'><img src='./tickets/PETRA.png'></div>";

  echo "<h2> $source </h2>";
  echo "<h3> $date </h3>";
  }
  else if($dest == 'D'){
    echo "<div class='imagee'><img src='./tickets/GREAT WALL OF CHINA.png'></div>";

  echo "<h2> $source </h2>";
  echo "<h3> $date </h3>";
  }
  else if($dest == 'E'){
    echo "<div class='imagee'><img src='./tickets/MACHU PICCHU.png'></div>";

  echo "<h2> $source </h2>";
  echo "<h3> $date </h3>";
  }
  else if($dest == 'F'){
    echo "<div class='imagee'><img src='./tickets/COLOSSEUM.png'></div>";

  echo "<h2> $source </h2>";
  echo "<h3> $date </h3>";
  }
  else if($dest == 'G'){
    echo "<div class='imagee'><img src='./tickets/CHICHEN ITZA.png'></div>";

  echo "<h2> $source </h2>";
  echo "<h3> $date </h3>";
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
    color: #3E3E3E;
    font-family: 'Bebas Neue', cursive;
} 
h3{
    position: absolute;
    top:1141px;
    left:41.5%;
    font-size:30px;
    color: #3E3E3E;
    font-family: 'Bebas Neue', cursive;
}
    </style>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ticket_php</title>
      <link rel="icon" href="../navbar/logo.ico" type="image/x-icon">
    </head>
    <body>
      
    </body>
    </html>