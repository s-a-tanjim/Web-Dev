<?php

if(isset($_POST['submit'])){

  include_once 'db_config.php';
  // mysqli_real_escape_string( , ) -> checks if input is risky for database
  $f_name = mysqli_real_escape_string ( $conn , $_POST['first_name'] );
  $last_name = mysqli_real_escape_string ( $conn , $_POST['last_name'] );
  $email = mysqli_real_escape_string ( $conn , $_POST['email'] );
  $user_id = mysqli_real_escape_string ( $conn , $_POST['user_name'] );
  $pwd = mysqli_real_escape_string ( $conn , $_POST['password'] );

  //Error handelers
  //To check for empty fields
  if(empty($f_name) || empty($last_name) || empty($email) || empty($user_id) || empty($pwd)){
    header("Location: ../signup.php?Signup=Empty");
    exit();
  }
  else {
    //Check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/",$f_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)){
      header("Location: ../signup.php?Signup=invalid");
      exit();
    }
    else {
      //check mail
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?Signup=invalid_email");
        exit();
      }
      else {
        $sql= "SELECT * FROM users WHERE user_uid='$user_id'";
        $result=mysqli_query($conn, $sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck>0){
          header("Location: ../signup.php?Signup=alreadyHaveAccount");
          exit();
        }
        else {
          //Hashing password
          $hashpwd=password_hash($pwd,PASSWORD_DEFAULT);
          //insert user into database
          $sql="INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$f_name','$last_name','$email','$user_id','$hashpwd')";
          mysqli_query($conn,$sql);
          
          
          header("Location: ../signup.php?Signup=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../signup.php");
  exit();
}