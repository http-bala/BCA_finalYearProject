<?php
include 'config.php';

$id = $_GET['sid'];

$sql = "DELETE FROM `taskdata` WHERE `id` = {$id} ";
$result = mysqli_query($con,$sql);

if ($result) {
    header("location:view-task.php");

}else{
    echo "have a some error";
}

?>