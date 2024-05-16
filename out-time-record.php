<?php 

include 'config.php';


$user_lat = $_POST['lat'];
$user_long = $_POST['long'];
$cname = $_POST['cname'];

$getSql = "SELECT * FROM `employee` WHERE `uname` = '$cname';";
$getrun = mysqli_query($con,$getSql);
$data = mysqli_fetch_assoc($getrun);

$emp_fname = $data['fname'];
$emp_lname = $data['lname'];
$emp_comp = $data['company'];

$dbSql = "SELECT * FROM `company` WHERE `c_name` = '$emp_comp';";
$dbgetrun = mysqli_query($con,$dbSql);
$c_data = mysqli_fetch_assoc($dbgetrun);


$c_lat = $c_data['latitude']; 
$c_long = $c_data['longitude']; 


// ============================================

    $userlat = deg2rad(floatval($user_lat));
    $c_lat = deg2rad(floatval($c_lat));
    $userlong = deg2rad(floatval($user_long));
    $c_long  = deg2rad(floatval($c_long));



    $theta = $userlong - $c_long;

 

    $miles = (sin($userlat)) * sin($c_lat) + (cos($userlat) * cos($c_lat)) * cos($theta);
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $result = $miles * 60 * 1.1515;
    $feet = $result * 5280;
    $yard = $feet / 3;
    $kilometers = $result * 1.609344;
    $merters = $kilometers * 1000;

 

// ============================================

if ($kilometers < 1) {

    $sql = "INSERT INTO `attend-record` (`employee_name`, `dt_record`, `lat`, `long`) VALUES ('$emp_fname', current_timestamp(), '$user_lat', '$user_long')";
    $run = mysqli_query($con,$sql);

    if ($run) {
        echo   '<div class="alert alert-success" role="alert">
        Attend sucessfull
      </div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
        there have some ! please fix it ....
      </div>';
    }

}else {
    echo '<div class="alert alert-danger" role="alert">
    your not in range , please come in range and click again!
  </div>';
}
   


?>