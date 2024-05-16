<?php 
      include 'config.php' ;
// echo "good moring";

$date = date('y-m-d', strtotime($_POST['date']));
$time = $_POST['time'];
$category = $_POST['category'];
$company = $_POST['company'];
$empolyee = $_POST['empolyee'];
$details = $_POST['details'];


if(!empty($date) && !empty($time) && !empty($category) && !empty($company) && !empty($empolyee) && !empty($details)){

    $sql = "INSERT INTO `taskdata` (date,time,category,company,employee,details) VALUES('$date','$time','$category','$company','$empolyee','$details')";
    $run = mysqli_query($con,$sql);
    // $run = false;
    if ($run) {
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
        <span class='alert-icon text-success me-2'>
          <i class='ti ti-check ti-xs'></i>
        </span>
        ADDED SUCESSFULLY :)
      </div>";
      header("location: view-task.php");
    }else{
        echo "<div class='alert alert-danger' role='alert'>error</div>";
      header("location: view-task.php");

    }
    
    }else {
        echo "<div class='alert alert-warning' role='alert'>filled all deatils </div> ";
      header("location: view-task.php");

    }

?>