<?php 
$showError = false;
    if(isset($_POST['login'])) {
        // echo "hello";
    $con = mysqli_connect("localhost","root","","location");
  
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);


      
  
        if($username == "" AND $password == ""){
            echo '<div class="alert alert-danger position-fixed text-center" role="alert">
                Enter the username or password !
          </div>';
        }else{

            $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
            $run = mysqli_query($con,$sql);
        
            if (mysqli_num_rows($run) > 0) {
                while ($data = mysqli_fetch_assoc($run)) {
                  // session_destroy();
                    session_start();
                    $_SESSION["name"] = $data['username'];
                    $_SESSION["user_id"] = $data['id'];
                    
                    header("location:index.php");
                }
            }else{
              // echo "<script> alert('hello error'); <script>";
              header("location:auth-login-cover.php");
              echo '<div class="alert alert-danger position-fixed  text-center " role="alert">
              Incorrect username and password !
            </div>';
            }
          }

        }
        
?>