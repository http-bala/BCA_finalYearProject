<?php 

include 'config.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);


$id = $mydata['id'];
$cname = $mydata['cname'];
$caddress = $mydata['caddress'];
$cnumber = $mydata['cnumber'];
$cemail = $mydata['cemail'];
$czipcode = $mydata['location'];


if(!empty($id) && !empty($cname) && !empty($caddress) && !empty($cnumber) && !empty($cemail) && !empty($czipcode)){

$sql = "UPDATE `company`
SET `c_name` = '{$cname}', `c_address` = '{$caddress}', `c_contact` = '{$cnumber}', `c_email` = '{$cemail}', `location` = '{$czipcode}'
WHERE `id` = {$id}";
$run = mysqli_query($con,$sql);
// $run = false;
if ($run) {
    echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
    <span class='alert-icon text-success me-2'>
      <i class='ti ti-check ti-xs'></i>
    </span>
    update SUCESSFULLY :)
  </div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>error</div>";
}

}else {
    echo "<div class='alert alert-warning' role='alert'>filled all deatils </div> ";
}

?>