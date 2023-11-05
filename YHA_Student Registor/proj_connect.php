<?php
$con = mysqli_connect("localhost", "root", "" ,"yha");
 
$start = 0;
$limited = 1;

$record = $con->query("SELECT * FROM project_example");
$no_of_row = $record -> num_rows;

$pages = ceil($no_of_row / $limited); // new page will be showed even if there was only 1 row left
if(isset($_GET['page-nr'])){ 
    $page = $_GET['page-nr'] - 1; // started from 0 in tb row
    $start = $page * $limited;  
}

$sql = ("SELECT * FROM project_example LIMIT $start, $limited");
$result = mysqli_query($con, $sql); 
?>   


