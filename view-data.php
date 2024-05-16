<?php
include 'config.php';

$id = $_POST['id'];

$sql = "SELECT * FROM `cmplete_task` WHERE `work_details` = '$id' ";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

echo '<div class="card-body d-flex ">
<img src="./admin/upload/' . $data['upload_img'] . '" style="width: 200px; height: 200px; object-fit: cover; broder-radius: 50%;" class="mb-4">
<ul mx-5>
    <li><b>Work date:-</b>' . $data['curent_date_time'] . '</li>
    <li><b>Work details:-</b>' . $data['work_details'] . '</li>
    <li><b>Problem dignoses:-</b>' . $data['p_dignoses'] . '</li>
    <li><b>Problem process:-</b>' . $data['p_process'] . '</li>
    <li><b>Problem description:-</b>' . $data['p_decspritions'] . '</li>
    <button type="button" class="btn btn-label-danger mt-5 " data-bs-dismiss="modal">Close</button>
</ul>
</div>';

?>
