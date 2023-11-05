<?php
include("inc/dbcon.php");
$output='';
    if(isset($_POST['que'])){
        $sql = "SELECT a.student_name FROM attendance AS a WHERE a.student_name LIKE '".$_POST['que']."%'";
        $result = mysqli_query($con,$sql);
        $output .='<ul class="list-unstyled">';
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                $output .= '<li>'.$row['student_name'].'</li>';
            }
        }else{
            $output .= '<li>Student Not Found</li>';
        }
        $output .= '</ul>';
        echo $output;
    }
?>