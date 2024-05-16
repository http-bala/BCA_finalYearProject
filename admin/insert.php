<?php 

include 'config.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);


$location = $mydata['location'];
$city = $mydata['city'];
$State = $mydata['state'];
$Country = $mydata['country'];
$latitude = $mydata['latitude']; 
$longitude = $mydata['longitubde']; 

$dumlat = deg2rad(20.380140795657645);
$dumlat1 = deg2rad(floatval($latitude));
$dumlong = deg2rad(72.90818732707253);
$dumlong1 = deg2rad(floatval($longitude));

$theta =  $dumlong- $dumlong1;

$miles = (sin($dumlat)) * sin($dumlat1) + (cos($dumlat) * cos($dumlat1)) * cos($theta);
$miles = acos($miles);
$miles = rad2deg($miles);
$result= $miles * 60 * 1.1515;
$feet= $result*5280;
$yard= $feet/3;
$kilometers = $result*1.609344;
$merters= $kilometers*1000;

if(!empty($location) && !empty($city) && !empty($State) && !empty($Country) && !empty($latitude) && !empty($longitude)){

$sql = "INSERT INTO `getlocation` (location,city,state,country,latitude,longitubde) VALUES('$location','$city','$State','$Country','$latitude','$longitude')";
$run = mysqli_query($con,$sql);
// $run = false;
if ($run) {
    echo '';
}else{
    echo "<div class='alert alert-danger' role='alert'>error</div>";
}

}else {
    echo "<div class='alert alert-warning' role='alert'>filled all deatils </div> ";
}

?>