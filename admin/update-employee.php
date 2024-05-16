<?php
include 'config.php';

$id = $_POST['id'];
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

if (!empty($empname) && !empty($empcode) && !empty($empusername) && !empty($empdesignation) && !empty($empcompany) && !empty($emppassword) && !empty($empdepartment) && !empty($emppan)  && !empty($empdob) && !empty($empdoj)  && !empty($empmail)  && !empty($empbankname)  && !empty($empbankac)  && !empty($empTPD)  && !empty($empbasicSalary)  && !empty($profile)) {

    $extension = pathinfo($profile, PATHINFO_EXTENSION);
    $val_extension = array("jpg", "jpeg", "png", "gif","webp");

    if (in_array($extension, $val_extension)) {
        $new_name = rand() . "." . $extension;
        $path = "upload/" . $new_name;

        if (move_uploaded_file($_FILES['profile']['tmp_name'], $path)) {

            $sql = "UPDATE `employee` SET `emp_name`='$empname',`emp_code`='$empcode',`emp_user`='$empusername',`emp_designation`='$empdesignation',`emp_company`='$empcompany',`emp_password`='$emppassword',`emp_department`='$empdepartment',`emp_pan`='$emppan',`emp_dob`='$empdob',`emp_doj`='$empdoj',`emp_mail`='$empmail',`emp_bankname`='$empbankname',`emp_bankAC`='$empbankac',`emp_tpd`='$empTPD',`emp_basicsalary`='$empbasicSalary',`emp_shifttime`='$shifttime',`profile`='$new_name' WHERE `id` = {$id}";
            $run = mysqli_query($con, $sql);

            if ($run) {
                echo '<div class="alert alert-success" role="alert">
              update sucessfully .....
           </div>';
            }
        }
    }
} else {
    echo "<div class='alert alert-warning' role='alert'>filled all deatils </div> ";
}
  
?>
