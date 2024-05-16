<?php 
include 'config.php' ;

 $cname = $_POST['cname'];
 $caddress = $_POST['caddress'];
 $cnumber = $_POST['contact'];
 $cemail = $_POST['email'];
 $location = $_POST['location'];
 $lat = $_POST['latitude'];
 $long = $_POST['longitude'];


if(!empty($cname) && !empty($caddress) && !empty($cnumber) && !empty($cemail) && !empty($location) && !empty($lat) && !empty($long)){

    $sql = "INSERT INTO `company` (`c_name`, `c_address`, `c_contact`, `c_email`, `location`, `latitude`, `longitude`) VALUES ( '$cname', '$caddress', '$cnumber', ' $cemail', ' $location', ' $lat', ' $long');";
    $run = mysqli_query($con,$sql);

    if ($run) {
      echo '<div class="alert alert-success" role="alert">
      This is a success alert — check it out!
    </div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">
      This is a danger alert — check it out!
    </div>';
    }
}else {
  echo '<div class="alert alert-warning" role="alert">
  This is a warning alert — check it out!
</div>';
}
?>