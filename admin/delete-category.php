<?php
include 'config.php';

$id = $_GET['sid'];

$sql = "DELETE FROM `category` WHERE `id` = {$id} ";
$result = mysqli_query($con,$sql);

if ($result) {
    header("location:category.php");

}else{

    
    echo "have a some error";
}

?>