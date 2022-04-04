<?php

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
$usname = $_POST['uname'];
$usemail = $_POST['uemail'];
$msg = $_POST['msg']; 
$rate= $_POST['rating1'];
 $sql = "insert into entry values('$usname','$usemail','$msg','$rate');";
 $result = mysqli_query($conn,$sql);

$sel = "Select * from entry";
$res = mysqli_query($conn,$sel);
?> 

<?php
// if(isset($_POST['submit'])){
//     echo "$res";
//     echo    "<table border='2px' width='400'>";
    

//     echo "<tr>";

//     echo "<td> Name </td> "; 
//     echo "<td> Email  </td> "; 
//     echo "<td> Message  </td> "; 
//     echo "<td> Rating  </td> "; 
//     echo "</tr>";
    
//     echo "<tr>";

//     echo "<td> $usname </td> "; 
//     echo "<td> $usemail </td> "; 
//     echo "<td> $msg </td> "; 
//     echo "<td> $rate </td> "; 
//     echo "</tr>";
//     echo "</table>";
// }

// if(mysqli_num_rows($res)>0){
//     while($row = mysqli_fetch_assoc($res)){
//         echo $row["name"]." msg: ". $row["message"];
//     }
// }
// else{
//     echo "0 results";
// }
echo "<br><Br><br>";

// getting all the data in table
if(mysqli_num_rows($res)>0){
    while($ro = mysqli_fetch_assoc($res)){
        echo     "<table border='1px' width='400'>";
    

           
            
            echo "<tr>";
            echo " <td> ".$ro["name"]." </td> "; 
            echo "<td>".  $ro["email"]." </td> "; 
            echo "<td>".  $ro["message"]." </td> "; 
            echo "<td>".  $ro["rate"]." </td> "; 
            echo "</tr>";
            echo "</table>";
    }
}
else{
    echo "0 results";
}


mysqli_close($conn);
?>

<?php
echo "<br><br>";
 echo '   <form action="" method="POST">
         <input type="text" name="namee" value="<?php if(isset($_POST["namee"])){ echo $usname}  ?>" id="">
 
 </form>'
?>