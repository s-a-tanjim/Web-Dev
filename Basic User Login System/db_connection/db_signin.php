<?php

session_start();

if(isset($_POST['submit'])){

  include_once 'db_config.php';

 $user_name= mysqli_real_escape_string($conn,$_POST['user_name']);
 $pwd= mysqli_real_escape_string($conn,$_POST['password']);

//error handlers

//check if inputs are empty
if(empty($user_name) || empty($pwd)){
  header("Location: ../index.php?login=empty");
  exit();
}
else {
  $sql="SELECT * FROM users WHERE user_uid='$user_name'";
  $result=mysqli_query($conn,$sql);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck<1){
    header("Location: ../index.php?login=usernameNotFound");
    exit();
  }
  else {
    if($row = mysqli_fetch_assoc($result)){
      //de-hashing pw
      $hashedpwdcheck=password_verify($pwd,$row['user_pwd']);
      if($hashedpwdcheck==false){
        header("Location: ../index.php?login=wrong_password");
        exit();
      }
      elseif($hashedpwdcheck==true){
        // logged in user account
        //Storing data  in session from database
        $_SESSION['u_id']=$row['user_id'];
        $_SESSION['u_first']=$row['user_first'];
        $_SESSION['u_last']=$row['user_last'];
        $_SESSION['u_email']=$row['user_email'];
        $_SESSION['u_uid']=$row['user_uid'];
        header("Location: ../index.php?login=LoginSuccess");
        exit();
      }
    }
  }
}



} else {
  header("Location: ../index.php?login=error");
  exit();
}

