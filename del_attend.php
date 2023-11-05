<?php 
include("inc/dbcon.php");
if(isset($_GET['id'])){
    $stuid = $_GET['id'];
}
$sql = "DELETE FROM attendance WHERE attend_id=$stuid";
mysqli_query($con,$sql);
header("Location:01.php");
?>