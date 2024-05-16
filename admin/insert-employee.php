<?php 
include 'config.php' ;

// echo $empname = $_POST['empname']; 
// echo $empcode = $_POST['empcode'];
// echo $empusername  = $_POST['empusername'];
// echo $empdesignation  = $_POST['empdesignation'];
// echo $empcompany = $_POST['empcompany'];
// echo $emppassword = $_POST['emppassword'];
// echo $empdepartment = $_POST['empdepartment'];
// echo $emppan = $_POST['emppan'];
// echo $empdob = $_POST['empdob'];
// echo $empdoj = $_POST['empdoj'];
// echo $empmail = $_POST['empmail'];
// echo $empbankname = $_POST['empbankname'];
// echo $empbankac = $_POST['empbankac'];
// echo $empTPD = $_POST['empTPD'];
// echo $empbasicSalary = $_POST['empbasicSalary'];
// echo $shifttime = $_POST['shifttime'];
// echo $profile = $_FILES['profile']['name'];
$empname = $_POST['empname'];
$empcode = $_POST['empcode'];
$empusername  = $_POST['empusername'];
$empdesignation  = $_POST['empdesignation'];
$empcompany = $_POST['empcompany'];
$emppassword = $_POST['emppassword'];
$empdepartment = $_POST['empdepartment'];
$emppan = $_POST['emppan'];
$empdob = $_POST['empdob'];
$empdoj = $_POST['empdoj'];
$empmail = $_POST['empmail'];
$empbankname = $_POST['empbankname'];
$empbankac = $_POST['empbankac'];
$empTPD = $_POST['empTPD'];
$empbasicSalary = $_POST['empbasicSalary'];
$shifttime = $_POST['shifttime'];
$profile = $_FILES['profile']['name'];


if(!empty($empname) && !empty($empcode) && !empty($empusername) && !empty($empdesignation) && !empty($empcompany) && !empty($emppassword) && !empty($empdepartment) && !empty($emppan)  && !empty($empdob) && !empty($empdoj)  && !empty($empmail)  && !empty($empbankname)  && !empty($empbankac)  && !empty($empTPD)  && !empty($empbasicSalary)  && !empty($profile)){

  $extension = pathinfo($profile, PATHINFO_EXTENSION);
  $val_extension = array("jpg", "jpeg", "png", "gif",);

              if (in_array($extension, $val_extension)) {
                  $new_name = rand() . "." . $extension;
                  $path = "upload/" . $new_name;

                        if (move_uploaded_file($_FILES['profile']['tmp_name'], $path)) {
                          
                          $sql = "INSERT INTO `employee`(`emp_name`, `emp_code`, `emp_user`, `emp_designation`, `emp_company`, `emp_password`, `emp_department`, `emp_pan`, `emp_dob`, `emp_doj`, `emp_mail`, `emp_bankname`, `emp_bankAC`, `emp_tpd`, `emp_basicsalary`, `emp_shifttime`, `profile`) VALUES ('$empname','$empcode','$empusername','$empdesignation','$empcompany','$emppassword','$empdepartment','$emppan','$empdob','$empdoj','$empmail','$empbankname','$empbankac','$empTPD','$empbasicSalary','$shifttime','$new_name')";
                          $run = mysqli_query($con,$sql);

                          if ($run) {
                              echo '<div class="alert alert-success" role="alert">
                              Employee is added !
                          </div>';
                          }
                        }
              }else{
                echo "<div class='alert alert-warning' role='alert'>This images is not dupport please give this type of jpg, jpeg, png, gif,webp </div> ";
              }
    }else {
        echo "<div class='alert alert-warning' role='alert'>filled all deatils </div> ";
    }

?>