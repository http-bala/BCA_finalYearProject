<?php

include 'config.php';

$sql = "SELECT * FROM `employee`";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[]=$row;
    }
}

echo json_encode($data);



?>