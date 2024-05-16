<?php
include 'config.php';

$id = $_GET['sid'];

$sql = "DELETE FROM `employee` WHERE `id` = {$id} ";
$result = mysqli_query($con,$sql);

if ($result) {
    header("location:view-employee.php");

}else{
    echo "have a some error";
}

?>