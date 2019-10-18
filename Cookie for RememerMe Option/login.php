<?php
if (isset($_COOKIE['email'])) {
  echo "cookie set"; //For debug
  $em = $_COOKIE['email'];
  echo "<script>
    document.getElementById('email').value='$em';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <!-- Website CSS style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

  <!-- Website Font style -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Admin</title>
  <style>
    body,
    html {
      height: 100%;
      background-repeat: no-repeat;
      background-color: #d3d3d3;
      font-family: 'Oxygen', sans-serif;
    }

    .main {
      margin-top: 70px;
    }

    h1.title {
      font-size: 50px;
      font-family: 'Passion One', cursive;
      font-weight: 400;
    }

    hr {
      width: 10%;
      color: #fff;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      margin-bottom: 15px;
    }

    input,
    input::-webkit-input-placeholder {
      font-size: 11px;
      padding-top: 3px;
    }

    .main-login {
      background-color: #fff;
      /* shadows and rounded borders */
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

    }

    .main-center {
      margin-top: 30px;
      margin: 0 auto;
      max-width: 330px;
      padding: 40px 40px;

    }

    .login-button {
      margin-top: 5px;
    }

    .login-register {
      font-size: 11px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row main">
      <div class="panel-heading">
        <div class="panel-title text-center">
          <h1 class="title">Login</h1>
          <hr />
        </div>
      </div>
      <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="valid.php">
          <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Username</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Username" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Password</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
              </div>
            </div>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" name="rememberme" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Remember password</label>
          </div>

          <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="login">Sign in</button>
          </div>
          <div class="login-register">
            <a href="create_account.php">Create account</a> or <a href="reset_password.php">reset password</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
