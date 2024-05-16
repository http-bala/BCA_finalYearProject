<?php

include 'config.php';

session_start();



$user_lat = $_POST['lat'];
$user_long = $_POST['long'];
$pdignoses = $_POST['pdignoses'];
$pprocess = $_POST['pprocess'];
$pdecspritions = $_POST['pdecspritions'];
$filename = $_FILES['image']['name'];
$cname = $_POST['cname'];


if (empty($user_lat) && empty($user_long) && empty($cname)) {
  echo "<script>alert('hi');</script>";
} else {

  $sql = "SELECT * FROM  `company` WHERE `c_name` = '$cname' ";
  $run = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($run);
  // ========================================== getting employee name ================================
  $sql_1 = "SELECT * FROM  `taskdata` WHERE `company` = '$cname' ";
  $run_1 = mysqli_query($con, $sql_1);
  $e_data = mysqli_fetch_assoc($run_1);

  $task_id = $e_data['id'];
  $employee = $e_data['employee'];
  $work_data = $e_data['details'];
  $db_lat = $data['latitude'];
  $db_long = $data['longitude'];



  $userlat = deg2rad(floatval($user_lat));
  $dblat = deg2rad(floatval($db_lat));
  $userlong = deg2rad(floatval($user_long));
  $dblong = deg2rad(floatval($db_long));

  $theta = $userlong - $dblong;

  $miles = (sin($userlat)) * sin($dblat) + (cos($userlat) * cos($dblat)) * cos($theta);
  $miles = acos($miles);
  $miles = rad2deg($miles);
  $result = $miles * 60 * 1.1515;
  $feet = $result * 5280;
  $yard = $feet / 3;
  $kilometers = $result * 1.609344;
  $merters = $kilometers * 1000;

  if ($kilometers < 1) {
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $val_extension = array("jpg", "jpeg", "png", "gif");

    if (in_array($extension, $val_extension)) {
      $new_name = rand() . "." . $extension;
      $path = "admin/upload/" . $new_name;

      if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $sql_attend = "INSERT INTO `cmplete_task`(`company_name`, `employe_name`, `curent_date_time`, `work_details`, `upload_img`, `p_dignoses`, `p_process`, `p_decspritions`) VALUES ('$cname','$employee',current_timestamp(),'$work_data','$new_name','$pdignoses','$pprocess','$pdecspritions')";
        $run_attend = mysqli_query($con, $sql_attend);
        if ($run_attend) {
          $sql_update = "UPDATE `taskdata` SET `flag`='1' WHERE `id`='$task_id'";
          $run_update = mysqli_query($con, $sql_update) or die("query not");
          if ($run_update) {
            echo '<div class="alert alert-success" role="alert">
               TASK IS COMPLETED ! YOU CAN MOVE NOW ....
            </div>';
          } else {
            echo '<div class="alert alert-danger" role="alert">
              THEIR HAVE SOME ERROR PLEASE CONTACT TO HEADQUATER
            </div>';
          }
        }
      }
    }
  } else {
    echo '<div class="alert alert-danger" role="alert">
        your not in range , please come in range and click again!
      </div>';
  }
}
