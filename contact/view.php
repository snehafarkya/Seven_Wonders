
<?php include 'connect.php';

if(!$conn){
    echo "error in getting connection";
}
else{
      echo "";
}
?>
<!-- <table border="1px" cellspacing="0px" cellpadding="10px">
<tr>
    <th>Username</th>
    <th>Password</th>
    <th>Phone No.</th>
    <th>Age</th>
    
</tr>
<?php
$sql="select * from entry";
$data=mysqli_query($conn, $sql);
$result=mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['rate']; ?></td> -->
        <!-- <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td> -->
        <!-- <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->
        
        <!-- <td><a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>  -->
    <!-- </tr>
    <?php
    
    
?>
</table> --> 

<?php
echo "<div> <h2>". $row['name'];
echo "</h2><br>".$row['message'];
echo "</div>";
    }
}
?>
<style>
    div{
        height:400px;
        width: 400px;
        border:2px black solid;
        background-color:beige;
        border-radius:12px;

    }
    h2{
        color: darkblue;
        text-transform:uppercase;
    }
</style>