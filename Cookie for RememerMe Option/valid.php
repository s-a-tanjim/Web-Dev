<?php
$myemail="a@a.com"; //sample email
$mypw="a";  //sample password
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $pw=$_POST['password'];

  if($email==$myemail and $pw==$mypw){
    if(isset($_POST['rememberme'])){
      $rem=$_POST['rememberme'];
      setcookie('email',$email,time()+60*60*7);
    }
    echo "Welcome!";
  }else{
    echo "Wrong email or password";
  }

}else{
  header("location:login.php");
}

//To check cookie:  in chrome search=> "chrome://settings/cookies/detail?site=localhost"