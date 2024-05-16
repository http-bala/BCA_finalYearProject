<?php 
include 'config.php' ;

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$catname = $mydata['catname'];

if(!empty($catname)){

    $sql = "INSERT INTO `category` (cat_name) VALUES('$catname')";
    $run = mysqli_query($con,$sql);
    // $run = false;
    if ($run) {
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
        <span class='alert-icon text-success me-2'>
          <i class='ti ti-check ti-xs'></i>
        </span>
        ADDED SUCESSFULLY :)
      </div>";
    }else{
        echo "<div class='alert alert-danger' role='alert'>error</div>";
    }
    
    }else {
        echo "<div class='alert alert-warning' role='alert'>filled all deatils </div> ";
    }

?>