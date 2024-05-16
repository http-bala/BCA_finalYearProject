<?php
$con = mysqli_connect("localhost", "root","","location");
function latetime($intime,$empuser,$con){

    $sql = "SELECT * FROM `employee`WHERE `emp_user` = '$empuser'";
    $query = mysqli_query($con,$sql);
    
    $data = mysqli_fetch_assoc($query);
    
    $correct_time = $data['emp_shifttime'];
    
    
    
    $startTime = strtotime($intime);
    $endtime = strtotime($correct_time);
    
    $diff =  $startTime - $endtime ;
    
    $hours = floor($diff / 3600);
    $Minutes = floor(($diff % 3600) / 60);
    $Seconds = $diff % 60;
    
    // return $startTime - $endtime;
    return sprintf("%02d:%02d:%02d",$hours,$Minutes,$Seconds);
    
    }

    echo latetime("09:00:00","mahesh",$con);

?>