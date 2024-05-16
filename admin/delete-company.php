<?php
include 'config.php';

$id = $_GET['sid'];

$sql = "DELETE FROM `company` WHERE `id` = {$id} ";
$result = mysqli_query($con,$sql);

if ($result) {
    header("location:view-company.php");

}else{
    echo "have a some error";
}

?>