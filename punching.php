<?php 


session_start();

include 'config.php';


$user_lat = $_POST['lat'];
$user_long = $_POST['long'];
$emp_username = $_SESSION['uname'];
$puchingrespone = $_POST['puchingrespone'];

$getSql = "SELECT * FROM `employee` WHERE `emp_user` = '$emp_username';";
$getrun = mysqli_query($con,$getSql);
$data = mysqli_fetch_assoc($getrun);

$emp_id = $data['id'];
$emp_code = $data['emp_code'];
$emp_user = $data['emp_user'];
$emp_comp = $data['emp_company'];

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

if ($kilometers < 5) {

  $timezone = new DateTimeZone('Asia/kolkata');
  $currentdatetime = new DateTime('now',$timezone);
  $currentdate = $currentdatetime->format('d-M-Y');
  $currenttime = $currentdatetime->format('H:i:s');


    $sql = "INSERT INTO `attend-record`(`emp_id`, `emp_user`, `lat`, `long`, `typeofpunching`, `attend_date`, `attend_time`) VALUES ('$emp_id','$emp_user','$user_lat','$user_long','$puchingrespone','$currentdate','$currenttime')";
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