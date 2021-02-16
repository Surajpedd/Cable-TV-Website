<?php 

$conn = mysqli_connect("localhost:3307", "root", "", "channels");

$id = $_GET['id'];

$sql = "DELETE FROM mypacks WHERE pack_id='$id'"; 

if(mysqli_query($conn,$sql)) 
    include 'mytv.php';
else 
    echo "Not Deleted";

?>
