<?php 

$conn = mysqli_connect("localhost:3307", "root", "", "channels");

$id = $_GET['id'];

$sql = "DELETE FROM mytelevision WHERE ch_num='$id'"; 

if(mysqli_query($conn,$sql)) 
    include 'mytv.php';
else 
    echo "Not Deleted";

?>
